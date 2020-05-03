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
    if (Auth::check()) {
        return redirect('/tweet');
    } else {
        return view('welcome');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tweet', 'TweetController@index')->middleware('auth');
Route::post('/tweet', 'TweetController@tweet')->middleware('auth');

Route::get('/explore', 'ExploreController@index')->middleware('auth');
Route::get('/explore/{id}', 'ExploreController@follow')->middleware('auth');
Route::get('/explore/{id}/unfollow', 'ExploreController@unfollow')->middleware('auth');

Route::get('/profile/edit', 'ProfileController@edit')->middleware('auth');
Route::post('/profile/edit', 'ProfileController@update')->middleware('auth');
Route::get('/profile/{username}', 'ProfileController@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
