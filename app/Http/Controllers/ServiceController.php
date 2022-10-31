<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::orderBy('order_by','asc')->get();
        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'description' => 'required',
        ]);
        $model=new Service();
        $model->title=$request->title;
        $model->offerUrl=$request->offerUrl;
        $model->postBackUrl=$request->postBackUrl;
        $model->back_color=$request->back_color;
        $model->font_color=$request->font_color;
        $model->description=$request->description;
        if($request->has('image')){
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('/images/service','public');
            $model->image=$path;
        }
        if($model->save()){
            return redirect()->back()->with('success','Service add successfully!');
        }else{
            return redirect()->back()->with('error','Failed to add service!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request,$id,$status)
    {
        
        $model=Service::findOrFail($id);
        $model->status=$status;
        if($model->update()){
            return redirect()->back()->with('success','Status change successfully!');
        }else{
            return redirect()->back()->with('error','Failed to change status!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::findOrFail($id);
        return view('admin.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service,$id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image',
            'description' => 'required',
        ]);
        $model=Service::findOrFail($id);
        $model->title=$request->title;
        $model->offerUrl=$request->offerUrl;
        $model->postBackUrl=$request->postBackUrl;
        $model->back_color=$request->back_color;
        $model->font_color=$request->font_color;
        $model->description=$request->description;
        if($request->has('image')){
            $image_path = public_path('storage/'.$model->image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('/images/service','public');
            $model->image=$path;
        }
        if($model->save()){
            return redirect('services/index')->with('success','Service update successfully!');
        }else{
            return redirect('services/index')->with('error','Failed to update service!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if($service->image){
            $image_path = public_path('storage/'.$service->image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        if($service->destroy($service->id)){
            return redirect()->back()->with('success','Service delete successfully!');
        }else{
            return redirect()->back()->with('error','Failed to delete service!');
        }
    }
    public function updatePosition(Request $request){
        $allData = $request->post('allData');
        foreach($allData as $key=>$val ){
            $category = Service::find($val);
            $category->order_by = $key;
            $category->update();
          
        }
       
        return response()->json('Position Change Successfully');
    }
}
