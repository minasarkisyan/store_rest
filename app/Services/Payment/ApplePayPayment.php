<?php


namespace App\Services\Payment;


class ApplePayPayment implements PaymentMethod
{
    public function getPaymentForm(): string
    {
        return "ApplePay form";
    }
}
