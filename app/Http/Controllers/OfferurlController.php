<?php

namespace App\Http\Controllers;

use App\Models\Offerurl;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferurlController extends Controller
{

    public function index(Request $request)
    {
        $model=new Offerurl();
        $model->service_id=$request->id;
        $model->click=1;
        if($model->save()){
            return response()->json(['succes'=>'click successfully']);
        }else{
            return response()->json(['error'=>'failed']);
        }
    }

    public function view(Request $request)
    {
        // $offer_urls=DB::table('offerurls')->join('services', 'services.id', '=', 'offerurls.service_id')
        // ->select('offerurls.*', 'services.*')
        // ->get();
        // $offer_urls=Service::with('clicks')->get();
        $offer_urls = Service::with(['clicks'=>function($q)use($request){
            if(isset($request->year)){
                $q->whereYear('created_at',$request->year);
            }
            if(isset($request->month)){
                $q->whereMonth('created_at',$request->month);
            }
            if (isset($request->day)) {
                $q->whereDay('created_at', $request->day);
            }   
            return $q;
        }])->whereHas('clicks')->get();

        return view('admin.offerurls.index',compact('offer_urls'));
    }

    public function show(Offerurl $offerurl,Request $request)
    {
        $offer_urls = Service::with(['clicks'=>function($q)use($request){
            if(isset($request->year)){
                $q->whereYear('created_at',$request->year);
            }
            if(isset($request->month)){
                $q->whereMonth('created_at',$request->month);
            }
            if (isset($request->day)) {
                $q->whereDay('created_at', $request->day);
            }   
            return $q;
        }])->get();
        return view('admin.offerurls.index',compact('offer_urls'));
    }
    public function report($id){
        $reports=Offerurl::where('service_id',$id)->get();
        return view('admin.offerurls.report',compact('reports'));
    }

}
