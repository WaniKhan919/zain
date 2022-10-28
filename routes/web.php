<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin',[AdminController::class,'index']);
Route::post('/admin/login',[AdminController::class,'adminLogin'])->name('admin-login');
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin-dashboard');

Route::name('setting.')->group(function () {
    Route::get('setting/index',[SettingController::class,'index'])->name('index');
    Route::post('setting/store',[SettingController::class,'store'])->name('store');
});
Route::name('services.')->group(function () {
    Route::get('services/index',[ServiceController::class,'index'])->name('index');
    Route::get('services/create',[ServiceController::class,'create'])->name('create');
    Route::post('services/store',[ServiceController::class,'store'])->name('store');
});