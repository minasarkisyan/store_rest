<?php

namespace App\Http\Controllers\Pay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StripeController extends Controller
{
    /**
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function store(Request $request, int $id)
    {
        return response(["data" => ["message" => "This action is pay for the product:$id using Stripe"]]);
    }
}
