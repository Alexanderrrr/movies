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


Route::prefix('movies')->group(function () {

    Route::get('/', 'MoviesController@index');
    Route::get('/show/{movieId}', 'MoviesController@show');
    Route::get('/create', 'MoviesController@create');
    Route::get('show/genres/{movieGenres}', 'GenresController@show');
    Route::post('/', 'MoviesController@store');
    Route::post('/comment/add/{movieId}', 'CommentsController@store');
});
Route::get('/', 'MoviesController@index');
