<?php

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
Route::zoomWebhooks('webhooks/zoom');
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[\App\Http\Controllers\ZoomController::class,'index']);
Route::get('test/form', function () {
    return view('test/form');
});
