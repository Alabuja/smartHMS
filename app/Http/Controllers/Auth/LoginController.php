<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated($request, $user)
    {

        if($user->role == 'doctor')
        {
            return redirect('doctor/home') ;
        }

        else if($user->role == 'nurse')
        {
            return redirect('nurse/home');
        }
        else if($user->role == 'pharmacist')
        {
            return redirect('pharmacist/home');
        }
        else if($user->role == 'accountant')
        {
            return redirect('accountant/home');
        }
        else if($user->role == 'laboratorist')
        {
            return redirect('laboratorist/home');
        }
        else if($user->role == 'receptionist')
        {
            return redirect('receptionist/home');
        }
        else {
            return redirect('/');
        }
    }

    // public function logout($request)
    // {
        
    // }
}
