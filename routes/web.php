<?php

use App\Http\Controllers\Bai03Controller;
use App\Http\Controllers\CateController;
use App\Http\Controllers\TestController;
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

Route::get('/tinh-tong/{a}-{b}',[TestController::class,'tong']);

Route::get('/b3', [Bai03Controller::class,'tuyensinh']);
Route::post('/tuyen-sinh-post', [Bai03Controller::class,'xulytuyensinh']);


//Bài tập 2
//Mở view nhập liệu
Route::get('/add-cate',[CateController::class,'addCate']);

//Xử lý khi nhấn nút Thêm mới
Route::post('/add-cate-post',[CateController::class,'addcatepost']);
Route::get('/list-cate',[CateController::class,'index'])->name('listcate');