<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio() {
        $portfolios = Portfolio::all();
        $info = Info::first();
    return view('front.portfolio', compact('portfolios', 'info'));
   }
}
