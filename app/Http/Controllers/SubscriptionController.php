<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Service;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index($service,Request $request)
    {
        $service1=Service::where('postBackUrl',$service)->first();
        if(isset($request->clickid) && isset($service1)){
            session()->put('click_id',$request->clickid);
            return redirect($service1->offerUrl);
        }
        if(isset($request->msisdn)){
            $click_id=session()->get('click_id');
            $model=new Subscription();
            $model->phone_no=$request->msisdn;
            $model->service_name=$service;
            $model->service_id=$service1->id ?? '';
            $model->click_id=$click_id ?? null;
            if($model->save()){
                if($service=='trayef'){
                    $tel=5646;
                }else if($service=='haboob'){
                    $tel=5636;
                }else if($service=='el3afia'){
                    $tel=5691;
                }else if($service=='Ghonia'){
                    $tel=5635;
                }else if($service=='ro7'){
                    $tel=5216;
                }else if($service=='agmal'){
                    $tel=5616;
                }else if($service=='story'){
                    $tel=5214;
                }else if($service=='a3lam'){
                    $tel=5696;
                }else if($service=='sonan'){
                    $tel=5699;
                }
                $data=Page::first();
                return view('front.post_back',compact('data','tel'))->with('success','Successs');
            }
        }
        return redirect('/')->with('error','Failed');
    }

    public function view()
    {
        $postback=Service::with('clicks')->get();
        return view('admin.postback.index',compact('postback'));
    }
    public function report($id)
    {
        
        $reports=Subscription::where('service_id',$id)->get();
        return view('admin.postback.report',compact('reports'));
    }

}
