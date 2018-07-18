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
    return view('index');
});
Route::get('/web', function () {
    return view('web');
});
Route::get('/elearning', function () {
    return view('elearning');
});
Route::get('/humanresource', function () {
    return view('humanresource');
});
Route::get('/mobile', function () {
    return view('mobile');
});
Route::get('/corporate', function () {
    return view('corporate');
});
Route::get('/document', function () {
    return view('document');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
