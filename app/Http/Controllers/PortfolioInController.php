<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioInController extends Controller
{
    public function portfolioIn($slug)
  {
    $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
    $info = Info::first();
    return view('front.portfolioIn', compact('portfolio', 'info'));
  }
}
