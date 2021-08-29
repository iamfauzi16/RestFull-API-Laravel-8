<?php

use App\Http\Controllers\FoodsControllers;
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

Route::get('/foods', 'FoodsControllers@get');
Route::get('/foods/{id}', 'FoodsControllers@getById');
Route::post('/food', 'FoodsControllers@post');
Route::put('/food/{id}', 'FoodsControllers@put');
Route::delete('/food/{id}', 'FoodsControllers@delete');

Route::get('/drinks', 'DrinksControllers@get');
Route::get('/drinks/{id}', 'DrinksControllers@getById');
Route::post('/drink', 'DrinksControllers@post');
Route::put('/drink/{id}', 'DrinksControllers@put');
Route::delete('/drink/{id}', 'DrinksControllers@delete');