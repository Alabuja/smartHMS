<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceptionistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('receptionist.welcome');    
    }

    public function profile()
    {
        return view('receptionist.profile');
    }

	/**
	*	Patient
	*/
	public function getPatient()
    {
        return view('nurse.newpatients');
    }

    public function addPatient(Request $request)
    {
        
    }

    public function getAppointment()
    {
        return view('receptionist.appointment');
    }

    public function addAppointment()
    {
        //Should Be a Modal
    }
}
