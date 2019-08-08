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

Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function () {

    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::post('resetpassword', 'AuthController@resetPassword');
    Route::post('verifyclient', 'AuthController@verifyclient');
   
    Route::get('governorates', 'MainController@governorates');
    Route::get('cities', 'MainController@cities');
    

   
    
    
    
   
    



    Route::group(['middleware' => 'auth:api',], function () {
     
        Route::get('posts', 'MainController@posts');
        Route::get('filterposts', 'MainController@filterposts');
        Route::post('toggle/{id}', 'MainController@toggle');
        
    });
});
//api/v1/governorate
