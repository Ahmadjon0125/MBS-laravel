<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceInController extends Controller
{
    public function serviceIn($slug){
        $service = Service::with('photo')->find($slug);
        return view('front.servicein', compact('sevice') );
    }
}
