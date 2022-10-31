<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Offerurl;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }
    public function adminLogin(Request $request)
    {
        $request->validate([
            'email'   => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($request->only(['email','password']))) {
            return redirect()->intended('/admin/dashboard');
        }

        return back()->with('error','Invalid Login details');
    }
    public function dashboard(){
        $service=Service::count();
        $offerurl=Offerurl::where('click',1)->count();
        return view('admin.index',compact('service','offerurl'));
    }
    public function profile(){
        $admin=Auth::guard('admin')->user();
        return view('admin.profile',compact('admin'));
    }
    public function profileUpdate(Request $request){
        $user=Auth::guard('admin')->user();
        $admin=Admin::where('email',$user->email)->first();
        $request->validate([
            'image'=>'image',
            'password' => 'required_with:confirm_password|same:confirm_password',
        ]);
        if(isset($request->passord)){
            if(Hash::check($request->current_password,$admin->password)){
                $admin->password= Hash::make($request->password);
            }else{
                return redirect()->back()->with('error','Your current password not matched!');
            }
        }
        if($request->has('image')){
            if($user->image){
                $image_path = public_path('storage/'.$user->image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }   
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('/images/profie','public');
            $admin->image=$path;
        }
        $admin->name=$request->name;
        $admin->email=$request->email;
        if($admin->update()){
            return redirect()->back()->with('success','Profile updated successfully');
        }else{
            return redirect()->back()->with('error','Failed to update profile');
        }
    }
}

