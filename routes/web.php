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

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('governorate','GovernorateController');
Route::resource('governorate.city','CityController');


Route::resource('post','PostController');
Route::resource('category','CategoryController');


Route::resource('donation','DonationController');
Route::resource('clients','ClientController');
/*
Route::resource('reports','ReportController');


Route::resource('settings','SettingController');
Route::resource('users','UserController');*/


Route::resource('roles','RoleController');

