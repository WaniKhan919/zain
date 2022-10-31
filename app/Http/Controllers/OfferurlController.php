<?php

namespace App\Http\Controllers;

use App\Models\Offerurl;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferurlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        // $offer_urls=DB::table('offerurls')->join('services', 'services.id', '=', 'offerurls.service_id')
        // ->select('offerurls.*', 'services.*')
        // ->get();
        $offer_urls=Service::with('clicks')->get();
        return view('admin.offerurls.index',compact('offer_urls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offerurl  $offerurl
     * @return \Illuminate\Http\Response
     */
    public function show(Offerurl $offerurl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offerurl  $offerurl
     * @return \Illuminate\Http\Response
     */
    public function edit(Offerurl $offerurl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offerurl  $offerurl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offerurl $offerurl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offerurl  $offerurl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offerurl $offerurl)
    {
        //
    }
}
