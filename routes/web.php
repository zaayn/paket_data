<?php

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
    return view('auth.login');
});


Auth::routes();

Route::group(['prefix' => 'admin',  'middleware' => 'is_admin'], function(){

    Route::get('/home', 'HomeController@admin')->name('home.admin');
});

Route::group(['prefix' => 'user',  'middleware' => 'is_user'], function(){

    Route::get('/home', 'HomeController@user')->name('home.user');
});
Auth::routes();

