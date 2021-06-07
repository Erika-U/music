<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/tags', 'App\Http\Controllers\TagController@index');
Route::post('/tags', 'App\Http\Controllers\TagController@store');
Route::get('/tags/{tag}', 'App\Http\Controllers\TagController@show');
Route::put('/tags/{tag}', 'App\Http\Controllers\TagController@update');
Route::delete('/tags/{tag}', 'App\Http\Controllers\TagController@destroy');

Route::get('/artists', 'App\Http\Controllers\ArtistController@index');
Route::post('/artists', 'App\Http\Controllers\ArtistController@store');
Route::get('/artists/{artist}', 'App\Http\Controllers\ArtistController@show');
Route::put('/artists/{artist}', 'App\Http\Controllers\ArtistController@update');
Route::delete('/artists/{artist}', 'App\Http\Controllers\ArtistController@destroy');

Route::get('/songs', 'App\Http\Controllers\SongController@index');
Route::post('/songs', 'App\Http\Controllers\SongController@store');
Route::get('/songs/{song}', 'App\Http\Controllers\SongController@show');
Route::put('/songs/{song}', 'App\Http\Controllers\SongController@update');
Route::delete('/songs/{song}', 'App\Http\Controllers\SongController@destroy');

