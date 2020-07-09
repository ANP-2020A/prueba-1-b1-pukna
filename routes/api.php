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
Route::get('articles', 'ArticleController@index');
Route::get('articles/{products}', 'ProducController@show');
Route::post('articles', 'ProducController@store');
Route::put('articles/{products}', 'ProducController@update');
Route::delete('articles/{products}', 'ProducController@delete');
Route::get('articles', 'CostumersController@index');
Route::get('articles/{costumers}', 'CostumersController@show');
Route::post('articles', 'CostumersController@store');
Route::put('articles/{costumers}', 'CostumersController@update');
Route::delete('articles/{costumers}', 'CostumersController@delete');


