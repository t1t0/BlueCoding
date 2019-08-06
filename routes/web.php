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
Route::get('/results', 'SearchController@results');
Route::post('/results', 'SearchController@results');
Route::get('/history', 'HistoryController@searchlist');
Route::get('/favorites', 'FavoritesController@favoritelist');
Route::post('/favorites/{id}', 'FavoritesController@addFavorite');
Route::get('/profile', 'ProfileController@show');
Route::patch('/profile', 'ProfileController@edit');
Auth::routes();
