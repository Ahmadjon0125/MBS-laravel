<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductInController extends Controller
{
  public function productIn($slug)
  {
    $product = Product::where('slug', $slug)->firstOrFail();
    $info = Info::first();
    return view('front.productIn', compact('product', 'info'));
  }
}
