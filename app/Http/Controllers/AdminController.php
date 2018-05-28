<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\DepartmentRequest;
use App\Http\Requests\FacilityRequest;
use App\Http\Traits\DepartmentTrait;
use App\Department;
use App\Facility;
use App\Role;

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
     //    $role           = new Role;
     //    $department     = new Department;

     //    $roles          = $role->roles_details();
     //    $departments    = $department->fetch_all_departments();
    	// return view('admin.newusers', compact('roles', 'departments'));
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
