<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index($service,Request $request)
    {
        $service1=Service::where('postBackUrl',$service)->first();
        if(isset($request->clickid)){
            session()->put('click_id',$request->clickid);
            return redirect($service1->offerUrl);
        }
        if(isset($request->msisdn)){
            $click_id=session()->get('click_id');
            $model=new Subscription();
            $model->phone_no=$request->msisdn;
            $model->service_name=$service;
            $model->service_id=$service1->id;
            $model->click_id=$click_id ?? null;
            if($model->save()){
                return redirect('/')->with('success','Successs');
            }else{
                return redirect('/')->with('error','Failed');;
            }
        }
    }

    public function view()
    {
        $postback=Service::with('clicks')->get();
        return view('admin.postback.index',compact('postback'));
    }

}
