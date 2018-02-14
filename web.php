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
    return view('pages.content');
});

Route::get('blog', function () {
    return view('pages.blog');
});

Route::get('properties', function () {
    return view('pages.properties0');
});

Route::get('aboutus', function () {
    return view('pages.aboutus');
});

Route::get('contact', function () {
    return view('pages.contactus');
});

Route::get('kursor', function () {
    return view('pages.testcursorfollow');
});

Route::get('/Resources/LESS', 'Blackpeak\ResourceController@Less');
Route::get('kursor', 'FootForward\DBController@hakunamatata');
Route::get('kursor', 'FootForward\DBController@testowanie');
