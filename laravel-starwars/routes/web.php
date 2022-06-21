<?php

use Illuminate\Support\Facades\Route;

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
    dd(config('db.posts'));
    return view('welcome')->name('welcome');
});

Route::get('/news', 'Guest/PostController@index')->name('news.index');
Route::get('/news/{post}', 'Guest/PostController@show')->name('news.index');
