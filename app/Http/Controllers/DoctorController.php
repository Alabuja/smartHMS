<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
	*	Patient
	*/
    public function index()
    {
        return view('doctor.welcome');    
    }

    public function profile()
    {
        return view('doctor.profile');
    }

	public function getPatient()
    {
    	return view('doctor.newpatients');
    }

    public function addPatient()
    {
    	// Should be A Modal
    }

    public function getBloodDonor()
    {
        return view('admin.blood_donor');
    }

    public function getBloodBank()
    {
        return view('admin.blood_bank');
    }

    public function getAppointment()
    {
        return view('doctor.appointment');
    }

    public function addAppointment($value='')
    {
        //Should Be a Modal
    }

}
