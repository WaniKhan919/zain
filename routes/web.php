<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OfferurlController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[FrontController::class,'index'])->name('front.index');
Route::post('/offerurl',[OfferurlController::class,'index'])->name('offer-url');

Route::get('/cmd/{cmd}', [FrontController::class, 'cmd']);

Route::get('/admin',[AdminController::class,'index'])->name('login');
Route::post('/admin/login',[AdminController::class,'adminLogin'])->name('admin-login');
Route::group(['middleware' => ['auth:admin']], function() {
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin-dashboard');
    //Setting Routes
    Route::name('setting.')->group(function () {
        Route::get('setting/index',[SettingController::class,'index'])->name('index');
        Route::post('setting/store',[SettingController::class,'store'])->name('store');
    });
    Route::resource('pages',PageController::class);
    //Services Routes
    Route::name('services.')->group(function () {
        Route::get('services/index',[ServiceController::class,'index'])->name('index');
        Route::get('services/create',[ServiceController::class,'create'])->name('create');
        Route::post('services/store',[ServiceController::class,'store'])->name('store');
        Route::get('services/edit/{id}',[ServiceController::class,'edit'])->name('edit');
        Route::post('services/update/{id}',[ServiceController::class,'update'])->name('update');
        Route::get('services/status/{id}/{status}',[ServiceController::class,'status'])->name('status');
        Route::post('services/destory/{service}',[ServiceController::class,'destroy'])->name('destory');
        Route::post('admin/services/posiiton',[ServiceController::class,'updatePosition'])->name('orderPosition');
    });
    //Admin Profile Routes
    Route::get('/admin/profile',[AdminController::class,'profile'])->name('admin-profile');
    Route::post('/admin/profile/update',[AdminController::class,'profileUpdate'])->name('admin.profile.update');
    Route::get('/admin/logout', function () {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    });
    //Offer url Routes
    Route::any('/admin/offerurl',[OfferurlController::class,'view'])->name('admin-offer-url');
    Route::get('/admin/offerurl/report/{id}',[OfferurlController::class,'report'])->name('offer-url-report');
    // Route::post('/admin/date/filter',[OfferurlController::class,'show'])->name('date-filter');
    ///Post back url Routes
    Route::get('/admin/postBack',[SubscriptionController::class,'view'])->name('admin-post-backurl');
    Route::get('/admin/postBack/report/{id}',[SubscriptionController::class,'report'])->name('post-backurl-report');
});

Route::get('/{service}',[SubscriptionController::class,'index'])->name('post-back');
Route::get('/{service}/{ad?}',[FrontController::class,'service'])->name('service-page');
