<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function product() {
      $products = Product::all();
      $info = Info::first();
      return view('front.product', compact('products', 'info'));
   }
}
