<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route::group(['middleware' => 'WCVerify'], function() {
});
*/
Route::post('/order', 'ReceiverController@createOrder');
Route::get('/orders', 'ReceiverController@getAllOrders');
Route::put('/order/{id}', 'ReceiverController@updateOrder');
Route::post('/register', 'Auth\RegisterController@register');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout');
