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
    return view('welcome');
});

Route::post('/upload',"PageController@upload")->name("upload");

Route::get('auth/facebook', 'FacebookController@redirect')->name("fb.redirect");
Route::get('auth/facebook/callback', 'FacebookController@callBack')->name("fb.callBack");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
