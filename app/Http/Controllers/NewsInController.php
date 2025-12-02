<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\News;
use Illuminate\Http\Request;

class NewsInController extends Controller
{
      public function newsIn($slug)
  {
    $new = News::where('slug', $slug)->firstOrFail();
    $info = Info::first();
    return view('front.newsIn', compact('new', 'info'));
  }
}
