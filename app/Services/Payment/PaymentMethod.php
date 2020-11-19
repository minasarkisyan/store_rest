<?php


namespace App\Services\Payment;



interface PaymentMethod
{
    public function getPaymentForm(): string;
}
