<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function showProducts() {
      $products = Product::all();
      return view ('products.index')->with

    }

}
