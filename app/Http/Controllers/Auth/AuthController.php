<?php

namespace App\Http\Controllers\Auth;

use App\deerfieldUser;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:deerfieldUsers',
            'username' => 'required|max:255|unique:deerfieldUsers',
            'password' => 'required|min:6|confirmed',
        ]);
    }


    public function get_register() {
        return view('auth/register');
    }

    public function get_login(){
        return view('auth/login');
    }

    public function create(array $data)
    {
        return deerfieldUser::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);

//        $user = new deerfieldUser;
//        $user->firstname = Input::get('firstname');
//        $user->lastname = Input::get('lastname');
//        $user->email = Input::get('email');
//        $user->username = Input::get('username');
//        $user->password = Hash::make(Input::get('password'));
//        $user->save();
//        return redirect('home');
    }

    public function login(){
        if (Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')])) {
            // Authentication passed...
            return redirect('/');
        }
        return 'Login incorrect!';
    }

    public function logout(){
        Auth::logout();

        return redirect('home');
    }
}

