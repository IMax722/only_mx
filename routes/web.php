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

Route::get('/main', function () {
    return view('main');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contacts', function () {
    return view('contacts.feedback_form');
    return view('contacts.main');
});
Route::post('/contacts', 'FeedBackController@join');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/login', ['as' => 'admin.login','uses' => 'AuthAdmin\LoginController@showLoginForm']);
Route::post('/admin/login', ['uses' => 'AuthAdmin\LoginController@login']);
Route::get('/admin/logout', ['as' => 'admin.logout','uses' => 'AuthAdmin\LoginController@logout']);
