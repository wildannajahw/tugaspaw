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
    return view('home');
});
Route::get('/collection', function () {
    return view('auth.collection');
});
Route::get('/clothing', function () {
    return view('auth.clothing');
});
Route::get('/contactus', function () {
    return view('auth.contactus');
});
Route::get('/aboutus', function () {
    return view('auth.aboutus');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/customsize', 'HomeController@customsize')->name('customsize');
