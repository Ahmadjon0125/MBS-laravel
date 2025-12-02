<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
   public function news() {
      $news = News::all();
      $info = Info::first();
    return view('front.news', compact('news', 'info'));
   }
}
