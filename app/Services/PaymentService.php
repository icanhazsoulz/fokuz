<?php

namespace App\Services;

interface PaymentService
{
    function createOrder($orderDetails);
    function captureOrder($orderId);
}
