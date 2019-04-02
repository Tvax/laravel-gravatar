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
    redirect()->route('home');
});
Route::get("/user", "UserController@index")->name("index");
Auth::routes();

//route auto laravel ->
Route::get('/home', 'HomeController@index')->name('home');


////////////////UPDATE////////////////
Route::get('/mails/{id}/edit/default', [
    'as' => 'mails.default', 'uses' => 'UserController@updateDefaultMail'
]);
Route::post('/mails/{id}/edit/name', [
    'as' => 'mails.name', 'uses' => 'UserController@updateMail'
]);
Route::get('/avatars/{id}/edit/default', [
    'as' => 'avatars.default', 'uses' => 'UserController@updateDefaultAvatar'
]);

///////////////DELETE//////////////////
Route::get('/avatars/{id}/delete', [
    'as' => 'avatars.delete', 'uses' => 'UserController@deleteAvatar'
]);
Route::get('/mails/{id}/delete', [
    'as' => 'mails.delete', 'uses' => 'UserController@deleteMail'
]);

//////////////ADD//////////////////////
Route::post('/mails/add', 'UserController@addMail')->name('mails.add');
Route::post('/avatars/add', [
    'as' => 'avatars.add', 'uses' => 'UserController@addAvatar'
]);
