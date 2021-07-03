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
})->name('welcome');


Route::get('register', 'RegisterController@index' )->name('register');
Route::post('register/check', 'RegisterController@check')->name('register-check');

Route::get('login', 'LoginController@index' )->name('login');
Route::post('login', 'LoginController@auth')->name('login-auth');

Route::get('dashboard', 'DashboardController@index' )->name('dashboard');

