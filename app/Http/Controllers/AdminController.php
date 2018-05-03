<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\DepartmentRequest;
use App\Http\Requests\FacilityRequest;
use App\Http\Traits\DepartmentTrait;
use App\Department;
use App\Facility;

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
    *   End Department
    */

    /**
    *   Department Facility
    */

    
 

    // public function store(UsersRequest $request)
    // {
    	
    // }

}
