<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductWishListController extends Controller
{
    /**
     * @param $id
     * @return Response
     */
    public function store(int $id)
    {
        return response(['data' => ["message" => "This action added the product: $id to wishlist"]]);
    }
}
