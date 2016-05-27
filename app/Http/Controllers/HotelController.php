<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/15/16
 * Time: 4:13 PM
 */

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{


    public function index(){

        $hotels = Hotel::all();
        return view('hotel')->with('hotels', $hotels);
    }
}