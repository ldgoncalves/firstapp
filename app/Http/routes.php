<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\deerfieldUser;
use App\Hotel;


Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('hotel', 'HotelController@index');

Route::get('restaurant', 'RestaurantController@index');

Route::get('thingstodo', 'ThingsToDoController@index');

Route::get('events', 'EventController@index');

Route::get('shopping', 'ShoppingController@index');

Route::get('register', 'Auth\AuthController@get_register');

Route::post('register', 'Auth\AuthController@register');

Route::get('login', 'Auth\AuthController@get_login');

Route::post('login', 'Auth\AuthController@login');

Route::get('logout', 'Auth\AuthController@logout');

Route::post('query', 'QueryController@search');

//Route::auth();

