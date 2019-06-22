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

Route::get('/aboutus', function(){
    return view('aboutus');
});

Route::get('/services', function(){
    return view('services');
});

Route::get('/recentprojects', function(){
    return view('recentprojects');
});

Route::get('/team', function(){
    return view('team');
});

Route::get('/contact', function(){
    return view('contact');
});