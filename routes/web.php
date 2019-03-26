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

Route::get("/", function(){
    return view("welcome");
})->name("home");
Route::get("/user", "UserController@index")->name("index");

////////////TEST//////////
Route::get("/test/add/mail", "UserController@addMail");
Route::get("/test/add/avatar", "UserController@addAvatar");
Route::post("/test/add/avatar", "UserController@imageUploadPost")->name("post_avatar");


/*
Exemple route
Route::get("/bozo/{post?}", "BozoController@clown")->name("bozo")->middleware("bozo_ware");
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
