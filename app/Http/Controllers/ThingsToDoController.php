<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/15/16
 * Time: 5:46 PM
 */

namespace App\Http\Controllers;

use App\Thingstodo;

class ThingsToDoController extends Controller
{
    public function index(){

        $thingstodo = Thingstodo::all();

        return view('thingstodo')->with('thingstodo', $thingstodo);
    }
}