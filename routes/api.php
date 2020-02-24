<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Logo Routes
Route::get('logos', 'LogoController@index');
Route::get('logo/{id}', 'LogoController@show');
Route::post('logo', 'LogoController@store');
Route::put('logo', 'LogoController@store');
Route::delete('logo/{id}', 'LogoController@destroy');

// Company Routes
Route::get('company', 'CompanyController@index');
Route::get('company/{id}', 'CompanyController@show');
Route::post('company', 'CompanyController@store');
Route::put('company', 'CompanyController@store');
Route::delete('company/{id}', 'CompanyController@destroy');

// Platform Routes
Route::get('platforms', 'PlatformController@index');
Route::get('platform/{id}', 'PlatformController@show');
Route::post('platform', 'PlatformController@store');
Route::put('platform', 'PlatformController@store');
Route::delete('platform/{id}', 'PlatformController@destroy');

// Region Routes
Route::get('regions', 'RegionController@index');
Route::get('region/{id}', 'RegionController@show');
Route::post('region', 'RegionController@store');
Route::put('region', 'RegionController@store');
Route::delete('region/{id}', 'RegionController@destroy');

// Genre Routes
Route::get('genres', 'GenreController@index');
Route::get('genre/{id}', 'GenreController@show');
Route::post('genre', 'GenreController@store');
Route::put('genre', 'GenreController@store');
Route::delete('genre/{id}', 'GenreController@destroy');

// Publisher Routes
Route::get('publishers', 'PublisherController@index');
Route::get('publisher/{id}', 'PublisherController@show');
Route::post('publisher', 'PublisherController@store');
Route::put('publisher', 'PublisherController@store');
Route::delete('publisher/{id}', 'PublisherController@destroy');

// Developer Routes
Route::get('developers', 'DeveloperController@index');
Route::get('developer/{id}', 'DeveloperController@show');
Route::post('developer', 'DeveloperController@store');
Route::put('developer', 'DeveloperController@store');
Route::delete('developer/{id}', 'DeveloperController@destroy');

// SegaGame Routes
Route::get('sega_games', 'SegaGameController@index');
Route::get('sega_game/{id}', 'SegaGameController@show');
Route::post('sega_game', 'SegaGameController@store');
Route::put('sega_game', 'SegaGameController@store');
Route::delete('sega_game/{id}', 'SegaGameController@destroy');

// UserGame Routes
Route::get('user_games', 'UserGameController@index');
Route::get('user_game/{id}', 'UserGameController@show');
Route::post('user_game', 'UserGameController@store');
Route::put('user_game', 'UserGameController@store');
Route::delete('user_game/{id}', 'UserGameController@destroy');
