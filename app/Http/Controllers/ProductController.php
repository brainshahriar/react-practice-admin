<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function indexapi()
    {
        $product=Product::all();
        return $product;
    }
 public function showDetails($id)
    {
        $product=Product::where('id',$id)->get();
        return $product;
    }
}
