<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        return view('admin.profile');
    }


	/**
	*	Doctors
	*/
	public function getOfficial()
    {
    	return view('admin.newusers');
    }

    public function addOfficial()
    {
        # code...

        //Should be a modal
    }

    /**
	*	Appointments 
	*/
	public function getAppointment()
    {
    	# code...
    }

    /**
	*	Patient
	*/
	public function getPatient()
    {
    	return view('admin.newpatients');
    }

    public function addPatient()
    {
    	# code...
    }

    /**
    *   Monitor Hospital
    */

    public function getBloodDonor()
    {
        return view('admin.blood_donor');
    }

    public function getBloodBank()
    {
        return view('admin.blood_bank');
    }

    public function getMedicine()
    {
        return view('admin.medicine');
    }

    /**
    *   Department
    */

    public function getDepartment()
    {
        return view('admin.department');
    }

    public function addDepartment()
    {
        //return view('admin.newdepartment');
        // Should a modal
    }

    public function store(UsersRequest $request)
    {
    	
    }

}
