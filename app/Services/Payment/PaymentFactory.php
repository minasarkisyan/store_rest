<?php


namespace App\Services\Payment;


class PaymentFactory
{
    private const APPLE_PAY = 'applePay';
    private const PAY_PALL = 'payPall';
    private const STRIPE = 'stripe';


    /**
     * Получаем способ оплаты по его ID.
     *
     * @param $id
     * @return string
     */
    public static function getPaymentMethod($id): string
    {
        switch ($id) {
            case self::APPLE_PAY:
                return new ApplePayPayment();
            case self::PAY_PALL:
                return new PayPallPayment();
            case self::STRIPE:
                return new StripePayment();
            default:
                return "Unknown Payment Method";
        }
    }
}
