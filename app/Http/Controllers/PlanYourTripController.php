<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/20/16
 * Time: 12:08 AM
 */
namespace App\Http\Controllers;
use App\Planyourtrip;
use App\HotelTrip;
use App\RestaurantTrip;
use App\ThingstodoTrip;
use App\EventTrip;
use App\ShoppingTrip;
use App\Hotel;
use App\Restaurant;
use App\Thingstodo;
use App\Event;
use App\Shopping;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

//use App\Http\Controllers\Controller;

class PlanYourTripController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /* get userid and check if there is a trip created. If not create one */
    private function getTrip(){
        $trip = Planyourtrip::where('userid',Auth::user()->id)->first();

        if(!$trip){
            $trip =  new Planyourtrip();
            $trip->userid=Auth::user()->id;
            $trip->save();
        }

        return $trip->id;
    }


    /* Add item to list */

    public function addHotelToTrip ($hotelId){
        $tripId = $this->getTrip();

        $hotelTrip  = new HotelTrip();
        $hotelTrip->hotelid = $hotelId;
        $hotelTrip->tripid = $tripId;
        $hotelTrip->save();

        return redirect('plan-trip');
    }

    public function addRestaurantToTrip ($restaurantId){
        $tripId = $this->getTrip();

        $restaurantTrip  = new RestaurantTrip();
        $restaurantTrip->restaurantid = $restaurantId;
        $restaurantTrip->tripid = $tripId;
        $restaurantTrip->save();

        return redirect('plan-trip');
    }

    public function addThingstodoToTrip ($thingstodoId){
        $tripId = $this->getTrip();

        $thingstodoTrip  = new ThingstodoTrip();
        $thingstodoTrip->thingstodoid = $thingstodoId;
        $thingstodoTrip->tripid = $tripId;
        $thingstodoTrip->save();

        return redirect('plan-trip');
    }

    public function addEventToTrip ($eventId){
        $tripId = $this->getTrip();

        $eventTrip  = new EventTrip();
        $eventTrip->eventid = $eventId;
        $eventTrip->tripid = $tripId;
        $eventTrip->save();

        return redirect('plan-trip');
    }

    public function addShoppingToTrip ($shoppingId){
        $tripId = $this->getTrip();

        $shoppingTrip  = new ShoppingTrip();
        $shoppingTrip->shoppingid = $shoppingId;
        $shoppingTrip->tripid = $tripId;
        $shoppingTrip->save();

        return redirect('plan-trip');
    }

    /* Show saved list */

    public function showList(){
        $tripId = $this->getTrip();

        $hotels = DB::table('hotelTrip')
            ->join('hotels', 'hotelTrip.hotelid', '=', 'hotels.id')
            ->where('hotelTrip.tripId', '=', $tripId)
            ->select('hotels.*', 'hotelTrip.id as hotelTripId')->get();

        $restaurants = DB::table('restaurantTrip')
            ->join('restaurants', 'restaurantTrip.restaurantid', '=', 'restaurants.id')
            ->where('restaurantTrip.tripId', '=', $tripId)
            ->select('restaurants.*', 'restaurantTrip.id as restaurantTripId')->get();

        $thingsToDos = DB::table('thingstodoTrip')
            ->join('thingstodos', 'thingstodoTrip.thingstodoid', '=', 'thingstodos.id')
            ->where('thingstodoTrip.tripId', '=', $tripId)
            ->select('thingstodos.*', 'thingstodoTrip.id as thingstodoTripId')->get();

        $events = DB::table('eventTrip')
            ->join('events', 'eventTrip.eventid', '=', 'events.id')
            ->where('eventTrip.tripId', '=', $tripId)
            ->select('events.*', 'eventTrip.id as eventTripId')->get();

        $shoppings = DB::table('shoppingTrip')
            ->join('shopping', 'shoppingTrip.shoppingid', '=', 'shopping.id')
            ->where('shoppingTrip.tripId', '=', $tripId)
            ->select('shopping.*', 'shoppingTrip.id as shoppingTripId')->get();

        $planyourtrips = DB::table('planyourtrips')->where('id', '=', $tripId)
            ->select('planyourtrips.*')->get();


        $items = array(
            'planyourtrip' => $planyourtrips,
            'hotels' => $hotels,
            'restaurants' => $restaurants,
            'thingsToDos' => $thingsToDos,
            'events' => $events,
            'shoppings' => $shoppings

        );

        return view('plan-trip',['items'=>$items]);
    }

    /* More Information from list */

    public function moreInfoFromHotel ($id){

            $moreInfoHotel = Hotel::where('id', '=', $id)->first();

        return view('moreinfo-from-trip')->with('hotel', $moreInfoHotel);

    }

    public function moreInfoFromRestaurant ($id){

            $moreInfoRestaurant = Restaurant::where('id', '=', $id)->first();

        return view('moreinfo-from-trip')->with('restaurant', $moreInfoRestaurant);
    }

    public function moreInfoFromThingstodo ($id){

        $moreInfoThingstodo = Thingstodo::where('id', '=', $id)->first();

        return view('moreinfo-from-trip')->with('thingstodo', $moreInfoThingstodo);
    }

    public function moreInfoFromEvent ($id){

        $moreInfoEvent = Event::where('id', '=', $id)->first();

        return view('moreinfo-from-trip')->with('event', $moreInfoEvent);
    }

    public function moreInfoFromShopping ($id){

       $moreInfoShopping= Shopping::where('id', '=', $id)->first();

        return view('moreinfo-from-trip')->with('shopping', $moreInfoShopping);
    }


    /* Remove item from list */

    public function removeHotelFromTrip ($hotelTripId){

      HotelTrip::where('id', $hotelTripId)->delete();

        return redirect('plan-trip');
    }

    public function removeRestaurantFromTrip ($restaurantTripId){

        RestaurantTrip::where('id', $restaurantTripId)->delete();

        return redirect('plan-trip');
    }

    public function removeThingstodoFromTrip ($thingstodoTripId){

        ThingstodoTrip::where('id', $thingstodoTripId)->delete();

        return redirect('plan-trip');
    }

    public function removeEventFromTrip ($eventTripId){
        EventTrip::where('id', $eventTripId)->delete();

        return redirect('plan-trip');
    }

    public function removeShoppingFromTrip ($shoppingTripId){
        ShoppingTrip::where('id', $shoppingTripId)->delete();

        return redirect('plan-trip');
    }

    /* Add and Update travel dates*/

    public function editDates($id)
    {

       if ($id) {
           $planyourtrip = Planyourtrip::where('id', '=', $id)->first();
       }
        else{
            $planyourtrip = Planyourtrip::all();
        }
        return view('update')->with('planyourtrip', $planyourtrip);
    }


    public function update($tripId)
    {
        $data = Input::all();

        $startDate = date("Y-m-d", strtotime($data['start_date']));
        $endDate = date("Y-m-d", strtotime($data['end_date']));
        DB::table('planyourtrips')->where('id', '=', $tripId)->update(['start_date' => $startDate, 'end_date' => $endDate]);

        return redirect('plan-trip');



    }
}