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
    return view('pages.properties');
});

Route::get('aboutus', function () {
    return view('pages.aboutus');
});

Route::get('contact', function () {
    return view('pages.contactus');
});

Route::get('name', function () {
    return view('pages.nameofpage');
});

Route::get('name', 'nameSubfolder\DBController@hakunamatata');   //hakunamatata is the name of the function in DBcontroller.php
