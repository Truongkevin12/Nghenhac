<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
use App\Http\Controllers\Admincontrolller;





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

// Route::get('/',[TinController::class,'index']);
// Route::get('/tin/{id}',[TinController::class,'chitiet']);
// Route::get('/cat/{idLT}',[TinController::class,'tintrongloai']);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware([
//      'auth:sanctum',
//      config('jetstream.auth_session'),
//      'verified'
//  ])->group(function () {
//      Route::get('/dashboard', function () {
//          return view('dashboard');
//      })->name('dashboard');
//  });
// Route::get('/admin/tin/danhsach',[Admincontrolller::class,'danhsach']);
//  Route::get('/tin/them',[Admincontrolller::class,'them']);
//  Route::post('/tin/them',[Admincontrolller::class,'them_']);
//  Route::get('/tin/xoa/{id}',[Admincontrolller::class,'xoa']);
// Route::get('/tin/capnhat/{id}',[Admincontrolller::class,'capnhat']);
// Route::post('/tin/capnhat/{id}',[Admincontrolller::class,'capnhat_']);