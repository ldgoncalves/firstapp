<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/15/16
 * Time: 6:16 PM
 */

namespace App\Http\Controllers;

use App\Shopping;

class ShoppingController extends Controller
{
    public function index(){

        $shoppings = Shopping::all();

        return view('shopping')->with('shoppings', $shoppings);
    }

}