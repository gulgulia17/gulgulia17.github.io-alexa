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

Route::get('/','PagesController@home');
Route::resource('product','ProductsController');

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    Route::group(['middleware' => ['web','auth',]],function(){
        Route::resource('product','ProductsController');
    });
});