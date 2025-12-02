<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Company;
use App\Models\Info;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function home() {
      $companys = Company::all();
      $abouts = About::first();
      $sliders = Slider::all();
      $services = Service::all();
      $partners = Partner::all();
      $info = Info::first();
    return view('front.index', compact('companys', 'abouts', 'sliders', 'services', 'partners','info',));
   }
}
