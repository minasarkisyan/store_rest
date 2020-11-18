<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductOrderController extends Controller
{
    /**
     * @return Response
     */
    public function create()
    {
        return response(['data' => 'This action show form for order product']);
    }

    /**
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function store(Request $request, int $id)
    {
        return response(['data' => "This action adds the product: $id to the order"]);
    }
}
