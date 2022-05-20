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
Route::get('/index/create', 'App\Http\Controllers\WaterController@create')->name('index.create');
Route::get('/index/addbilling', 'App\Http\Controllers\WaterController@create')->name('index.addbilling');
Route::post('/index', 'App\Http\Controllers\WaterController@store')->name('index.store');
Route::get('/index/{id}', 'App\Http\Controllers\WaterController@show')->name('index.show')->middleware('auth');
Route::delete('/index/{id}', 'App\Http\Controllers\WaterController@destroy')->name('index.destroy')->middleware('auth');


Auth::routes();


/*Auth::routes([
    'register' => true
]);*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
