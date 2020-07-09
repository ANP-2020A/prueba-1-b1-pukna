<?php

use App\products;
use Illuminate\Http\Request;

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

/**Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::get('products', 'ProducController@index');
Route::get('products/{products}', 'ProducController@show');
Route::post('products', 'ProducController@store');
Route::put('products/{products}', 'ProducController@update');
Route::delete('products/{products}', 'ProducController@delete');
Route::get('costumers', 'CostumersController@index');
Route::get('costumers/{costumers}', 'CostumersController@show');
Route::post('costumers', 'CostumersController@store');
Route::put('costumers/{costumers}', 'CostumersController@update');
Route::delete('costumers/{costumers}', 'CostumersController@delete');


