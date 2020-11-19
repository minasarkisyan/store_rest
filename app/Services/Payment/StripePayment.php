<?php


namespace App\Services\Payment;


class StripePayment implements PaymentMethod
{
    public function getPaymentForm(): string
    {
        return "Stripe form";
    }

}
