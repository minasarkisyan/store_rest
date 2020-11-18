<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductsController extends Controller
{

    /**
     * @return Response
     */
    public function create()
    {
        return response(['data' => 'This action show form for create product']);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        return response(['data' => 'This action saves the product']);
    }


    /**
     * @param  int  $id
     * @return Response
     */
    public function destroy(int $id)
    {
        return response (['data' => [
                'message' => 'This action delete product',
                'detail' => $id
            ]]
        );
    }
}
