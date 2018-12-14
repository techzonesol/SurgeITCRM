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
Route::post('/contacts/create','ContactsController@save_contact')->name('save_contact');
Route::post('/contacts/delete','ContactsController@delete_contact')->name('delete_contact');
Route::get('/contacts/{id}','ContactsController@view_contact')->name('view_contact');
Route::post('/contacts/{id}','ContactsController@update_contact')->name('update_contact');