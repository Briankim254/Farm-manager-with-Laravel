<?php

use App\Http\Controllers\CategoryCotroller;
use App\Http\Controllers\CropController;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\farmCropController;
use App\Http\Controllers\farmRegisterController;
use App\Http\Controllers\LeaseController;
use App\Http\Controllers\NoteControlller;
use GuzzleHttp\Middleware;
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
    return view('dashboard');
})->name('dashboard');

Route::resource('crop', CropController::class);
Route::resource('category', CategoryCotroller::class);
Route::resource('farm', FarmController::class);
Route::resource('note', NoteControlller::class);
Route::resource('lease', LeaseController::class);
Route::resource('farm-crop', farmCropController::class);
Route::resource('register', farmRegisterController::class);

Route::group(['middleware'=>['auth']] ,function(){

});

