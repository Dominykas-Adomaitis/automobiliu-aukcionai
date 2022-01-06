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
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('games', 'GamesController@index');
Route::get('games/create', 'GamesController@create');
Route::post('games', 'GamesController@store');
Route::get('games/{id}', 'GamesController@show');
Route::get('search', 'GamesController@search')->name('search');

Route::get('mylist', 'GamesController@showmylist');
Route::get('/delete/{id}','GamesController@destroy');
Route::get('/edit/{id}', 'GamesController@edit');
Route::post('/update/{id}','GamesController@update');
Route::post('/bid/{id}','GamesController@bid');

Route::get('approval', 'GamesController@approval');
Route::get('/approve/{id}','GamesController@approve');


Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');






