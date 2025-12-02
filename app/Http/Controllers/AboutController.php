<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Info;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function about() {
      $abouts = About::first();
      $info = Info::first();
    return view('front.about', compact('abouts', 'info'));
   }
}
