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
require __DIR__ . '/web/auth.php';


Route::group(['middleware' => 'auth'], function () {
  Route::get('/', 'HomeController@index')->name('home');
  require __DIR__ . '/web/users.php';

});
