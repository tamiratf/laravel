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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'PagesController@home');
    Route::get('/about', 'PagesController@about');
    Route::get('/contact', 'TicketsController@create');
    Route::post('/contact', 'TicketsController@store');
    Route::get('/tickets', 'TicketsController@index');
    Route::get('/tickets/{slug?}', 'TicketsController@show');
    Route::get('/tickets/{slug?}/edit', 'TicketsController@edit');
    Route::post('/tickets/{slug?}/edit', 'TicketsController@update');
    Route::post('/ticket/{slug?}/delete','TicketsController@destroy');
});



