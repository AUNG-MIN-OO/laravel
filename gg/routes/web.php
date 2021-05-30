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
Route::get('/',"PageController@welcome")->name("welcome");

Route::get('/home',"HomeController@index")->name("home");
Route::get('/login',"CustomController@login")->name("login");
Route::post('/login',"CustomController@loginAccount")->name("login");

Route::post('/passcode-login',"CustomController@passcodeLogin")->name("passcode-login");
Route::view('/passcode-login',"passcode")->name("passcode-login");

Route::post('/logout',"CustomController@logoutAccount")->name("logout");
