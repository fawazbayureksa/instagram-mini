<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();


Route::get('@{username}','UserController@show');
Route::middleware('auth')->group(function(){
    
    Route::get('/home','HomeController@index')->name('home');
    Route::get('user/edit','UserController@edit');
    Route::put('user/edit','UserController@update');
    
    Route::resource('post',PostController::class);

});