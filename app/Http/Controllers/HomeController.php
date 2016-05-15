<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/15/16
 * Time: 3:27 PM
 */

namespace App\Http\Controllers;

use App\thingsToDo;

class HomeController extends Controller
{
    public function index(){

        $thingsToDo = thingsToDo::all();

        return view('home')->with('thingsToDo', $thingsToDo);
    }
}