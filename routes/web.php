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
    return view('collectors-dojo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/sega/{platform}/{region?}/{page?}', 'SegaController@index')->name('sega');
Route::get('/sega/{platform}/{region?}', 'SegaController@index')->name('sega-game');
Route::get('/nintendo/{platform}/{region?}', 'NintendoController@index')->name('nintendo');
Route::get('/sony/{platform}/{region?}', 'SonyController@index')->name('sony');
Route::get('/microsoft/{platform}/{region?}', 'MicrosoftController@index')->name('microsoft');

Route::get('/single-game/{platform}/{gameId}', 'SingleGameController@index')->name('single-game');
Route::post('/single-game', 'SingleGameController@addUserGame');

Route::post('/search', 'SearchController@search');
Route::post('/search/search-my-collection', 'SearchController@searchMyCollection');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/my-collection', 'MyCollectionController@index')->name('my-collection');
    Route::get('/collection-single/{game}', 'CollectionSingleController@index')->name('collection-single');
    
});
