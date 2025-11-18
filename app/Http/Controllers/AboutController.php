<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function about() {
      $abouts = About::first();
    return view('front.about', compact('abouts'));
   }
}
