<?php

use App\Http\Controllers\UserController;
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
Route::get('/login',[UserController::class,'index'])->name('login');
Route::post('/login',[UserController::class,'show']);
Route::get('/itemspage',[UserController::class,'itemsPage'])->name('itemspage');
//->middleware('userverify');
Route::get('/additems',[UserController::class,'addItems'])->name('additems');
Route::post('/itemsadded',[UserController::class,'itemsAdded'])->name('itemsAdded');