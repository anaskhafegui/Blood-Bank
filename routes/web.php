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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['middleware'=>['auth','auto-check-permission']],function(){



Route::get('/home', 'HomeController@index')->name('home');


Route::resource('governorate','GovernorateController');
Route::resource('governorate.city','CityController');



Route::resource('category','CategoryController');
Route::resource('category.post','PostController');


Route::resource('donation','DonationController');
Route::resource('clients','ClientController');



Route::resource('roles','RoleController');
Route::resource('user','UsersController');

Route::get('config/{id}','ConfigController@edit');
Route::put('config/{id}','ConfigController@update');

Route::get('reset_password', 'ResetAdminPasswordController@index');
Route::put('reset_password', 'ResetAdminPasswordController@update');

});