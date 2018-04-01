<?php

namespace App\Http\Controllers\Patient\Auth;

use App\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class PatientLoginController extends Controller
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
    protected $redirectTo = 'patient/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLoginForm()
    {
        return view('patient.auth.login');
    }

    public function authenticate(Request $requests)
    {
        $email = $requests->input('email');
        $password = $requests->input('password');

        if(auth()->guard('patient')->attempt(['email' => $email, 'password' => $password], $requests->has('remember') ))
        {
            return redirect()->intended('patient/home');
        }

        return redirect()->intended('patient/login')->with('status', 'Invalid Login Credentials!!!');
    }

    public function getLogout()
    {
        auth()->guard('patient')->logout();
        //Session::flush();
        return redirect()->intended('patient/login');
    }
}
