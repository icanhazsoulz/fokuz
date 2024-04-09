<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PayPalService implements PaymentService
{
    protected string $baseUrl;
    protected string $clientId;
    protected string $secret;

    public function __construct()
    {
        $this->baseUrl = config('services.paypal.base_url');
        $this->clientId = config('services.paypal.client_id');
        $this->secret = config('services.paypal.secret');
    }
    public function createOrder($orderDetails)
    {
        $accessToken = $this->generateAccessToken();
        // TODO: Clear the difference between total and subtotal - require information on taxes, discounts etc. from the client
        $orderDetails = json_decode($orderDetails, true);

        $payload = [
            "intent" => "CAPTURE",
            "purchase_units" => [
                [
                    'items' => $this->items($orderDetails['items']),
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $orderDetails['subtotal']/100,
                        'breakdown' => [
                            'item_total' => [
                                "currency_code" => "USD",
                                'value' => $orderDetails['subtotal']/100,
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            // 'PayPal-Request-Id': '7b92603e-77ed-4896-8e78-5dea2050476a',
            'Authorization' => "Bearer $accessToken",
        ])
            ->post($this->baseUrl . '/v2/checkout/orders', $payload);

        return $response->json();
    }

    public function captureOrder($orderId)
    {
        $accessToken = $this->generateAccessToken();

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => "Bearer $accessToken",
        ])
            ->withBody('')
            ->post($this->baseUrl . "/v2/checkout/orders/$orderId/capture");

        return $response->json();
    }

    protected function generateAccessToken()
    {
        // TODO: try-catch?
        $response = Http::withHeader('Content-Type', 'application/x-www-form-urlencoded')
            ->withBody('grant_type=client_credentials')
            ->withBasicAuth($this->clientId, $this->secret)
            ->post($this->baseUrl . '/v1/oauth2/token');

        return $response->json('access_token');
    }

    protected function items($arr): array
    {
        $items = [];

        foreach ($arr as $item) {
            $items[] = [
                'name' => $item['uuid'],
                'quantity' => $item['qty'],
                // 'url' =>,
                'category' => 'DIGITAL_GOODS',
                'unit_amount' => [
                    'currency_code' => 'USD',
                    'value' => $item['price']/100,
                ]
            ];
        }

        return $items;
    }
}
