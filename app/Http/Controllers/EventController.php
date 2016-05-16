<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/15/16
 * Time: 6:09 PM
 */

namespace App\Http\Controllers;

use App\Event;

class EventController extends Controller
{

    public function index(){

        $events = Event::all();

        return view('events')->with('events', $events);
    }

}
