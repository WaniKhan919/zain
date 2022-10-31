<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $logo=Setting::first();
        $services=Service::where('status',1)->orderBy('order_by','asc')->get();
        return view('front.index',compact('services','logo'));
    }
}