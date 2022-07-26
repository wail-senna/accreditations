<?php

namespace App\Http\Controllers\Auth;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    public function redirectTo(){
        //Admin login
        if(Auth::user()->role_as == 'admin')
        {
            return 'admin';
        }
        //initiateur login
        elseif(Auth::user()->role_as == 'initiateur')
        {
            return 'initiateur';
        }
        //coordonnateur login
        elseif(Auth::user()->role_as == 'coordonnateur')
        {
            return 'coordonnateur';
        }
        else {
            return '/';
        }
        

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
