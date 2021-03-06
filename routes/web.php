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
    $languages = ['HTML', 'CSS', 'JavaScript', 'PHP'];
    return view('home', compact('languages'));
});

Route::get('/about-me', function(){
    $name = 'Alessio Sada';
    $job = 'Junior Full Stack Developer';
    $articles = ['Learn PHP', 'Learn Laravel', 'Learn VueJS', 'Learn JS'];
    return view('about-me', compact('name', 'job', 'articles'));

});

Route::get('/about-me-2', function() {
    $name = 'Alessio Sada';
    $job = 'Junior Full Stack Developer';
    $articles = ['Learn PHP', 'Learn Laravel', 'Learn VueJS', 'Learn JS'];
    return view('about-me-2', compact('name', 'job', 'articles'));
})->name('about-me-2');