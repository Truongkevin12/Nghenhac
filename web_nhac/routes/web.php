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
| routes are   aded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[TinController::class,'index']);
Route::get('/tin/{id}',[TinController::class,'chitiet']);
Route::get('/cat/{idLT}',[TinController::class,'tintrongloai']);
Route::get('/search',[TinController::class,'getSearch']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
});
//route cho admin
// Route::get ('/admin',function(){
//     return view('admin') ;
// })->middleware('auth','Admin');
Route::get('admin/tin/danhsach',[Admincontrolller::class,'danhsach']);
Route::get('admin/tin/them',[Admincontrolller::class,'them']);
Route::post('admin/tin/them',[Admincontrolller::class,'them_'])->name('them');
Route::get('admin/tin/xoa/{id}',[Admincontrolller::class,'xoa']);

Route::get('admin/tin/capnhat/{id}',[Admincontrolller::class,'capnhat']);
Route::post('admin/tin/capnhat/{id}',[Admincontrolller::class,'capnhat_']);
//code danh sach loai tin
Route::get('admin/loaitin/danhsachtin',[Admincontrolller::class,'danhsachtin']);
Route::get('admin/loaitin/themtin',[Admincontrolller::class,'themloaitin'])->name('themloaitin');
Route::post('admin/loaitin/themtin',[Admincontrolller::class,'themloaitin_'])->name('themloaitin');
Route::get('loaitin/xoa/{id}',[Admincontrolller::class,'xoaloaitin']);

Route::get('loaitin/capnhatloaitin/{id}',[Admincontrolller::class,'capnhatloaitin']);
Route::post('loaitin/capnhatloaitin/{id}',[Admincontrolller::class,'capnhatloaitin_']);
