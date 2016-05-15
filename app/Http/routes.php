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

Route::get('hotel', 'HotelController@index');

Route::get('restaurant', 'RestaurantController@index');

Route::get('thingstodo', function() {
    return view ('thingstodo');
});

Route::get('events', function() {
    return view ('events');
});

Route::get('shopping', function() {
    return view ('shopping');
});






//Route::get('about', function(){
//   //return 'About content goes here.';
//    return view ('about');
//});
//
//Route::get('about/directions', function(){
//    return 'Directions go here.';
//});
//
//Route::get('about/{theSubject}', function($theSubject){
//    return $theSubject.' content goes here.';
//});
//
//Route::get('about/classes/{theSubject}', function($theSubject){
//    return "Content about {$theSubject} classes goes here."; //If your passing a param within a string use double quotes.
//});