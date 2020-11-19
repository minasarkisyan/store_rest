<?php


namespace App\Services\Payment;

class PayPallPayment implements PaymentMethod
{

    public function getPaymentForm(): string
    {
        return "PayPall form";
    }

}
