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

use App\Planyourtrip;

Route::get('/', 'HomeController@index');
//Route::get('/', function(){
//    Schema::table('planyourtrips', function($table)
//    {
//        $table->date('start_date')->nullable();
//        $table->date('end_date')->nullable();
//    });
//});

Route::get('/home', 'HomeController@index');

Route::get('hotel', 'HotelController@index');

Route::get('restaurant', 'RestaurantController@index');

Route::get('thingstodo', 'ThingsToDoController@index');

Route::get('events', 'EventController@index');

Route::get('shopping', 'ShoppingController@index');

Route::get('weatherreport', 'WeatherReportController@index');

Route::get('register', 'Auth\AuthController@get_register');

Route::post('register', 'Auth\AuthController@register');

Route::get('login', 'Auth\AuthController@get_login');

Route::post('login', 'Auth\AuthController@login');

Route::get('logout', 'Auth\AuthController@logout');

Route::group(array('before' =>  'auth'), function()
{
    Route::get('add-to-trip/hotel/{hotelId}', 'PlanYourTripController@addHotelToTrip');
    Route::get('add-to-trip/event/{eventId}', 'PlanYourTripController@addEventToTrip');
    Route::get('add-to-trip/restaurant/{restaurantId}', 'PlanYourTripController@addRestaurantToTrip');
    Route::get('add-to-trip/shopping/{shoppingId}', 'PlanYourTripController@addShoppingToTrip');
    Route::get('add-to-trip/thingstodo/{thingstodoId}', 'PlanYourTripController@addThingsToDoToTrip');
    Route::get('remove-from-trip/hotel/{hotelTripId}', 'PlanYourTripController@removeHotelFromTrip');
    Route::get('remove-from-trip/restaurant/{restaurantTripId}', 'PlanYourTripController@removeRestaurantFromTrip');
    Route::get('remove-from-trip/thingstodo/{thingstodoTripId}', 'PlanYourTripController@removeThingstodoFromTrip');
    Route::get('remove-from-trip/event/{eventTripId}', 'PlanYourTripController@removeEventFromTrip');
    Route::get('remove-from-trip/shopping/{shoppingTripId}', 'PlanYourTripController@removeShoppingFromTrip');
    Route::get('update-dates/update/{id}', 'PlanYourTripController@editDates');
    Route::put('update-dates/update/{id}', 'PlanYourTripController@update');
    Route::get('plan-trip', 'PlanYourTripController@showList');
});

Route::post('query', 'QueryController@search');

//Route::auth();

