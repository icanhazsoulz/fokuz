<?php

namespace App\Http\Controllers;

use App\Services\PayPalService;
use Illuminate\Http\Request;

class PayPalController extends Controller
{
    public function __construct(
        protected PayPalService $payPalService
    )  {}

    public function createOrder(Request $request)
    {
        // TODO: validation
        $orderDetails = $request->input('cart'); // array

        $response = $this->payPalService->createOrder($orderDetails);

        return response()->json($response);
    }

    public function captureOrder(string $id)
    {
        $response = $this->payPalService->captureOrder($id);

        return response()->json($response);
    }
}
