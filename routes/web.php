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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contacts','ContactsController@index')->name('contacts');
Route::get('/contacts/create','ContactsController@create')->name('create_contacts');

Route::get('/register/create','RegisterController@create')->name('create_user');
Route::post('/contacts/create','ContactsController@save_contact')->name('save_contact');

