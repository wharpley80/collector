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

Route::get('/{company}/{platform}/{region}/{sort?}', 'GameListController@index')->name('game-list');

Route::get('/single-game/{gameId}', 'SingleGameController@index');

Route::post('/single-game', 'SingleGameController@addUserGame');

Route::post('/search', 'SearchController@search');

Route::post('/search/search-my-collection', 'SearchController@searchMyCollection');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/my-collection/{platform?}', 'MyCollectionController@index')->name('my-collection');
    Route::get('/collection-single/{game}', 'CollectionSingleController@index')->name('collection-single');
    
});
