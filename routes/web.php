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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('collectors-dojo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sega', 'SegaController@index')->name('sega');

//Route::get('/sega/{platform}/{region?}/{page?}', 'SegaController@index')->name('sega');
Route::get('/sega/{platform}/{region?}', 'SegaController@index')->name('sega-game');
Route::post('/sega', 'SegaController@search');

Route::get('/playstation/{platform}/{region?}/{page?}', 'PlaystationController@index')->name('playstation');

Route::get('/sega-game', 'SegaGameController@index')->name('sega-game');
Route::get('/sega-game/{platform}', 'SegaGameController@getGamesByPlatform')->name('sega-game');

Route::get('/single-game/{platform}/{gameId}', 'SingleGameController@index')->name('single-game');
Route::post('/single-game', 'SingleGameController@addUserGame');