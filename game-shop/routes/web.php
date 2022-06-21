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
    return view('welcome');
})->name('home');

//Rotte per CRUD

    
    Route::get('/games', 'GameController@index')->name('games.index');
    Route::get('/games/create', 'GameController@create')->name('games.create');
    Route::post('/games', 'GameController@store')->name('games.store');


    Route::get('/games/{game}', 'GameController@show')->name('games.show');
    Route::get('/games/{game}/edit', 'GameController@edit')->name('games.edit');
    Route::put('/games/{game}', 'GameController@update')->name('games.update');
    Route::delete('/games/{game}', 'GameController@destroy')->name('games.destroy');





//Scorciatoia per generare le sette rotte rest per le operazioni CRUD
//Route::resource('/games', 'GameController');


/* 
model: Game
migration: games
controller: resource GameController
seeder: GameSeeder


- id
- title 
- description
- thumb
- cover_image
- created_at
- updated_at
*/
