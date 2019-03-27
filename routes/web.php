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
Auth::routes();

//route auto laravel ->
Route::get('/home', 'HomeController@index')->name('home');

////////////TEST//////////
Route::get("/test/add/mail", "UserController@addMail");
Route::get("/test/add/avatar", "UserController@addAvatar");
Route::post("/test/add/avatar", "UserController@imageUploadPost")->name("post_avatar"); 

Route::get("/test/update/mail", "UserController@updateDefaultMail");
Route::get("/test/update/avatar", "UserController@updateDefaultAvatar");

Route::get("/test/delete/mail", "UserController@deleteMail");
Route::get("/test/delete/avatar", "UserController@deleteAvatar");
/////////////////////////
