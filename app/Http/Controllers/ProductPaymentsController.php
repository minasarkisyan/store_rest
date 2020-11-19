<?php

namespace App\Http\Controllers;


use App\Services\Payment\PaymentFactory;
use Illuminate\Http\Request;

class ProductPaymentsController extends Controller
{
    public function store($id): string
    {
        return PaymentFactory::getPaymentMethod($id);
    }
}
