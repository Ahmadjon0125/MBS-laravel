<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){
        $services  = Service::all();
        return view('front.service', compact('services'));
    }
}
