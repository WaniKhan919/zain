<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting=Setting::first();
        return view('admin.setting.index',compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'logo' => 'image',
            'bg_image' => 'image',
        ]);
        $model=Setting::first() ?? new Setting();
        if($request->has('logo')){
            $image_path = public_path('storage/'.$model->logo);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $name = $request->file('logo')->getClientOriginalName();
            $path = $request->file('logo')->store('/images/setting','public');
            $model->logo=$path;
        }
        if($request->has('bg_image')){
            $image_path = public_path('storage/'.$model->bg_image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $name = $request->file('bg_image')->getClientOriginalName();
            $path = $request->file('bg_image')->store('/images/setting','public');
            $model->bg_image=$path;
        }
        if($model->save()){
            return redirect()->back()->with('success','Setting updated successfully!');
        }else{
            return redirect()->back()->with('error','Failed to updated!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        
    }
}
