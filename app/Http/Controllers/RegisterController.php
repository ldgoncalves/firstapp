<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/15/16
 * Time: 8:46 PM
 */

namespace App\Http\Controllers;

use App\deerfieldUser;

class RegisterController extends Controller
{
    public function index(){
        session()->flush();
        return view('register');
    }
    public function register(){
        $user = new deerfieldUser;
        $user->firstname = Input::get('fname');
        $user->lastname = Input::get('lname');
        $user->email = Input::get('email');
        $user->username = Input::get('username');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        return redirect('/');
    }

}