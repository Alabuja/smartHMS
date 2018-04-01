<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|numeric|unique:users',
            'password' => 'required|string|min:6',
            'address' => 'required',
            'birth_date' => '',
            'role' =>'required',
            'blood_group' => '',
            'sex' => '',
            'department_id' => '',
            'profile' => '',
            'linkedin_url' => '',
            'facebook_url' => '',
            'twitter_url' => '',
            'avatar' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'], 
            'password' => bcrypt($data['password']),
            'address' => $data['address'],
            'birth_date' => $data['birth_date'],
            'role' => $data['role'],
            'blood_group' => $data['blood_group'],
            'sex' => $data['sex'],
            'department_id' => $data['department_id'],
            'profile' => $data['profile'],
            'linkedin_url' => $data['linkedin_url'],
            'facebook_url' => $data['facebook_url'],
            'twitter_url' => $data['twitter_url'],
            'avatar' => $data['avatar'],
        ]);
    }

    public function showRegistrationForm()
    {
        return view('admin.newusers');
    }
}
