<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/15/16
 * Time: 5:46 PM
 */

namespace App\Http\Controllers;

use App\thingsToDo;

class ThingsToDoController extends Controller
{
    public function index(){

        $thingsToDo = thingsToDo::all();

        return view('thingstodo')->with('thingsToDo', $thingsToDo);
    }
}