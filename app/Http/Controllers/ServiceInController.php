<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceInController extends Controller
{
    public function serviceIn($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $info = Info::first();
        return view('front.servicein', compact('service', 'info'));
    }
}
