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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('posts', 'API\PostController@index');
Route::group(['prefix' => 'post'], function () {
    Route::post('add', 'API\PostController@add');
    Route::get('edit/{id}', 'API\PostController@edit');
    Route::post('update/{id}', 'API\PostController@update');
    Route::delete('delete/{id}', 'API\PostController@delete');
});
