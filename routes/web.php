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
use App\Post;

Route::name('home')->get('/', function () {
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
Route::name('blog')->get('/blog', function () {
    return view('blog');
});
Route::name('wedding_gallery')->get('/wedding_gallery', function () {
    return view('wedding_gallery');
});
Route::get('/posts/{post}', function(Post $post){
	return view('posts', compact('post'));
});