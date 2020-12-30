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
    // user
    Route::get('/home', 'HomeController@admin')->name('home.admin');
    Route::get('/admin','AdminController@admin')->name('user.admin');
    Route::get('/user','AdminController@user')->name('user');
    Route::get('/tambah_user','AdminController@insert')->name('tambah.user');
    Route::post('/store_user','AdminController@store')->name('store.user');
    Route::get('/edit_user/{id}','AdminController@edit')->name('edit.user');
    Route::put('/update/{id}','AdminController@update')->name('update.user');
});

Route::group(['prefix' => 'user',  'middleware' => 'is_user'], function(){

    Route::get('/home', 'HomeController@user')->name('home.user');
});
Auth::routes();

