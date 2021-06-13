<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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

Route::get('home',[WebController::class,"home"]);
Route::get('about-us',[WebController::class,"aboutUs"]);
Route::get('danhsach',[WebController::class,"danhSach"]);
Route::get('themmoi',[WebController::class,"addDanhsach"]);
Route::get('dsloaisp',[WebController::class,"dsLoaiSP"]);
Route::get('themloaisp',[WebController::class,"themLoaiSP"]);
