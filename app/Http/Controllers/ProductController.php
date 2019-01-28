<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Product;

class ProductController extends Controller
{
    public function show ($id)
    {
        return new Product(Product::find($id));
    }
}
