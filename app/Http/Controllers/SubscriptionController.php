<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Service;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubscriptionController extends Controller
{
    public function index($service,Request $request)
    {
        $service1=Service::where('postBackUrl', $service)->first();
        $click_id=session()->get('click_id');
        $model=new Subscription();
        $model->phone_no=$request->msisdn ?? '';
        $model->service_name=$service;
        $model->service_id=$service1->id ?? '';
        $model->click_id=$click_id ?? null;
        if ($model->save()) {
            if(isset($click_id)){
                try {
                    $postb = 'http://tracking.y2nx.com/postback?cid='. $click_id;
                    // \Log::channel('postback')->info($postb);
                    
                    $res_post = Http::get($postb);
                    // \Log::channel('postback')->info($res_post->body() . "\n");
                    session()->forget('clickid');
                    
                    return response()->json(['successs'=>'successs','postBack'=>$res_post->body()]);
                    } catch (\Exception $e) {
                        return response()->json(['error'=>'error catch']);
                    }
            }
            return response()->json(['successs'=>'successs']);
        } else {
            return response()->json(['error'=>'error']);

        }
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
