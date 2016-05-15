<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/15/16
 * Time: 4:25 PM
 */

namespace App\Http\Controllers;

use App\Restaurant;

class RestaurantController extends Controller
{
    public function index(){
        $restaurants = Restaurant::all();

        return view('restaurant')->with('restaurants', $restaurants);
    }
}