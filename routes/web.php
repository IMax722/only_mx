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
    return view('layouts.main');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contacts', function () {
    return view('contacts.feedback_form');
    return view('contacts.feedback_main');
});

Route::post('/feedback', 'ContactsController@insert');

Route::post('/emailfeedback', 'ContactsController@insertemailfeedback');

Route::post('/updateemailfeedback', 'ContactsController@updateemailfeedback');

Route::post('/updatefeedback', 'ContactsController@updatefeedback');

Route::post('/remark', 'ContactsController@insertremark');

Route::post('/updateremark', 'ContactsController@updateremark');

Route::post('/coop', 'ContactsController@insertcoop');

Route::post('/updatecoop', 'ContactsController@updatecoop');

Route::post('/order', 'OrdersController@insertorder');

Route::post('/updateorder', 'OrdersController@updateorder');

Route::post('/supply', 'SupplyController@insertsupply');

Route::post('/insertneed','NeedsController@insertneed');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', 'AdminController@index');
Route::get('/admin/login', ['as' => 'admin.login','uses' => 'AuthAdmin\LoginController@showLoginForm']);
Route::post('/admin/login', ['uses' => 'AuthAdmin\LoginController@login']);
Route::get('/admin/logout', ['as' => 'admin.logout','uses' => 'AuthAdmin\LoginController@logout']);
