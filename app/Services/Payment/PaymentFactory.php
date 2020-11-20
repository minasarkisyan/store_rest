<?php


namespace App\Services\Payment;


class PaymentFactory
{
    private const APPLE_PAY = 1;
    private const PAY_PALL = 2;
    private const STRIPE = 3;


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
