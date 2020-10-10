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
Route::get('/him', 'HomeController@home');
Route::get('/about', 'AboutController@about');
Route::get('/article/{id}', 'ArticleController@id');

//Route Tempalte
Route::get('/homeboot', 'HomeController@homeboot');

Route::get('/blog/{id}', 'ArticleController@articles');

Route::get('/ful', 'AboutController@full');
Route::get('/anime', 'AnimeController@anime');
Route::get('/profil', 'ProfilController@profil');
Route::get('/home', 'HomeController@full');