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
    return view('welcome');
});
/*
Route::get('/genesis', function () {
    return view('genesis');
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sega', 'SegaController@index')->name('sega');

Route::get('/sega/{platform}/{region?}/{page?}', 'SegaController@index')->name('sega');

Route::get('/playstation/{platform}/{region?}/{page?}', 'PlaystationController@index')->name('playstation');
