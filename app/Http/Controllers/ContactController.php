<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Map;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function contact() {
      $info = Info::first();
      $map = Map::first();
    return view('front.contact', compact('info', 'map'));
   }
}
