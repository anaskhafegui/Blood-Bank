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
   
    
    

   
    
    
    
   
    



    Route::group(['middleware' => 'auth:api',], function () {

        // Cities And Governorate
        Route::get('governorates', 'MainController@governorates');
        Route::get('cities', 'MainController@cities');

        // Edit Profile

        Route::post('editclient', 'AuthController@editclient');
        Route::post('registerNtoken', 'AuthController@registerNtoken');
        Route::post('removeNtoken', 'AuthController@removeNtoken');

        
     
        Route::get('posts', 'PostsController@posts');
        Route::get('showpost/{id}', 'PostsController@showpost');
        Route::get('filterposts', 'PostsController@filterposts');
        Route::post('toggle/{id}', 'PostsController@toggle');
        Route::get('favorites', 'PostsController@ListFavourite');

        

        Route::get('donate', 'DonationController@r_donate');
        Route::get('showdonate/{id}', 'DonationController@showdonate');
        Route::get('call-requests/{id}', 'DonationController@phonecall');
        Route::get('filterbloodtype', 'DonationController@filterblood');
        Route::get('filtergovernrate', 'DonationController@filtergovern');
        Route::post('createrequest', 'DonationController@createrequest');

        Route::post('selecttnotifications', 'NotificationController@select');

        Route::get('count_unreading', 'NotificationController@count_unreading');
        Route::get('listnotifications', 'NotificationController@listnotifications');
        Route::get('read/{id}', 'NotificationController@read');


        Route::get('config', 'NotificationController@config');
        Route::post('contactus', 'NotificationController@contactus');
        
        

    
        


        
    });
});
//api/v1/governorate
