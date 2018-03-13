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

Route::name('welcome')->get('/', function () {
    return view('welcome');
});
Route::name('about')->get('/about', function () {
    return view('about');
});
Route::name('event')->get('/event', function () {
    return view('event');
});
Route::name('gallery')->get('/gallery', function () {
    return view('gallery');
});
Route::name('contact')->get('/contact', function () {
    return view('contact');
});