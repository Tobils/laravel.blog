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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'blog'], function () {
    Route::get('/','BlogController@index')->name('blog.index');
    Route::post('/','BlogController@store')->name('blog.store');
    Route::get('/create','BlogController@create')->name('blog.create');
    Route::get('/edit/{id}','BlogController@edit')->name('blog.edit');
    Route::put('/update/{id}','BlogController@update')->name('blog.update');

});
