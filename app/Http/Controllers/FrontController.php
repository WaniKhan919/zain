<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class FrontController extends Controller
{
    public function index(){
        $logo=Setting::first();
        $services=Service::where('status',1)->orderBy('order_by','asc')->get();
        return view('front.index',compact('services','logo'));
    }
    public function cmd($cmd){
        Artisan::call("$cmd");
        echo "<pre>";
        return Artisan::output();

    }
    public function service($service,Request $request){
        if($request->clickid){
            session()->put('click_id',$request->clickid);
        }
        $service=Service::where('postBackUrl',$service)->first();
        return redirect($service->offerUrl ?? '/');
        // $data=Page::first();
        // return view('front.post_back',compact('service','data'));
    }
}
