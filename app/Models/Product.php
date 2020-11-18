<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Product extends Model
{
    use HasFactory;


    public function getCategory()
    {
        return Category::find($this->category_id);

    }
}
