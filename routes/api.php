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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/movies', 'MovieController@index');
Route::get('/movie/{id}', 'MovieController@show');
Route::get('/ticket_categories/{id}', 'TicketCategoryController@index');
Route::get('/ticket_classes/{id}', 'TicketClassController@index');
Route::get('/show_times/{id}/{movie_id}/{date}', 'ShowTimeController@index');
Route::get('/seats/{id}/{show_time_id}', 'SeatController@index');
Route::post('/cart', 'CartController@store');
