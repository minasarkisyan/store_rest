<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LikeReviewController extends Controller
{
    /**
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function store(Request $request, int $id)
    {
        return response(['data' => ['message' => 'This action add like for review: ' . $id]]);
    }


    /**
     * @param  int  $id
     * @return Response
     */
    public function update(int $id)
    {
        return response (['data' => ['message' => 'This action remove like for review: ' . $id]]);
    }
}
