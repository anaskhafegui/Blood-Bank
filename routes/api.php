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
     
        Route::get('posts', 'PostsController@posts');
        Route::get('showpost/{id}', 'PostsController@showpost');
        Route::get('filterposts', 'PostsController@filterposts');
        Route::post('toggle/{id}', 'PostsController@toggle');

        Route::get('donate', 'DonationController@r_donate');
        Route::get('showdonate/{id}', 'DonationController@showdonate');
        Route::get('call-requests/{id}', 'DonationController@phonecall');
        Route::get('filterbloodtype', 'DonationController@filterblood');
        Route::get('filtergovernrate', 'DonationController@filtergovern');
        Route::post('createrequest', 'DonationController@createrequest');


        
    });
});
//api/v1/governorate
