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

Route::get("/", "UserController@index")->name("index");
Route::get("/list", "UserController@listMail")->name("index");
Route::get("/avatar", "UserController@listMail")->name("index");


/*
Exemple route
Route::get("/bozo/{post?}", "BozoController@clown")->name("bozo")->middleware("bozo_ware");
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
