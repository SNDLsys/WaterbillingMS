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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'App\Http\Controllers\WaterController@index')->name('index.index')->middleware('auth');
Route::get('/index/showcus', 'App\Http\Controllers\WaterController@indexcus')->name('index.indexcus')->middleware('auth');

//displaying blade.php
Route::get('/index/create', 'App\Http\Controllers\WaterController@create')->name('index.create')->middleware('auth');;
Route::get('/echo/addbills', 'App\Http\Controllers\addBillController@displayAddbill')->name('echo.addbilling')->middleware('auth');;
Route::get('/index/{id}', 'App\Http\Controllers\WaterController@show')->name('index.show')->middleware('auth');
Route::get('/show/invoice', 'App\Http\Controllers\WaterController@create1')->name('index.create1')->middleware('auth');

// get the inputed info in the blade.php
Route::post('/index', 'App\Http\Controllers\WaterController@store')->name('index.store');
Route::post('/indexbill', 'App\Http\Controllers\AddBillController@storebills')->name('echo.storebills');

Route::delete('/index/{id}', 'App\Http\Controllers\WaterController@destroy')->name('index.destroy')->middleware('auth');


//Auth::routes();


Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
