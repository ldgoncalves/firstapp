<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/15/16
 * Time: 11:10 PM
 */

namespace App\Http\Controllers;

use App\Hotel;
use App\Restaurant;
use App\Shopping;
use App\thingsToDo;
use Illuminate\Support\Facades\Input;
use App\Event;

class QueryController extends Controller
{
    public function search() {
        $searchFor = Input::get('query');

        $hotels = Hotel::where('hotelName', 'LIKE', '%'.$searchFor.'%')->get();
        $restaurants = Restaurant::where('restaurantsName', 'LIKE', '%'.$searchFor.'%')->get();
        $thingsToDo = thingsToDo::where('thingstodoName', 'LIKE', '%'.$searchFor.'%')->get();
        $events = Event::where('eventName', 'LIKE', '%'.$searchFor.'%')->get();
        $shopping = Shopping::where('shoppingName', 'LIKE', '%'.$searchFor.'%')->get();

        $result = array(
            'hotels' => $hotels,
            'restaurants' => $restaurants,
            'thingsToDo' => $thingsToDo,
            'events' => $events,
            'shopping' => $shopping
        );

        return view('home')->with('result', $result);
    }
}