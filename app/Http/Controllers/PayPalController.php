<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;
use Illuminate\Http\Request;

class PayPalController extends Controller
{
    public function __construct(
        protected PaymentService $paymentService
    )  {}

    public function createOrder(Request $request)
    {
        // TODO: validation
        $orderDetails = $request->input('cart');

        $response = $this->paymentService->createOrder($orderDetails);

        return response()->json($response);
    }

    public function captureOrder(string $id)
    {
        $response = $this->paymentService->captureOrder($id);

        return response()->json($response);
    }
}
