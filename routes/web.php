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

Route::get('/home.html', function () {
    return view('layouts.home');
});


 Route::get('/services.html', function(){
    return view('layouts.services');
 });


 Route::get('/blog.html', function(){
    return view('layouts.blog');
 });


 Route::get('/contact.html', function(){
    return view('layouts.contact');
 });

 Route::get('/elements.html', function(){
    return view('layouts.elements');
 });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
