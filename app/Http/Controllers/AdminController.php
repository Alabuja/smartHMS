<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\DepartmentRequest;
use App\Http\Requests\FacilityRequest;
use App\Http\Traits\DepartmentTrait;
use App\Http\Traits\patientTrait;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Department;
use App\Facility;
use App\Role;
use App\User;
use App\Patient;

class AdminController extends Controller
{
    use patientTrait;

    public function __construct(User $user, Patient $patient)
    {
        $this->user         =   $user;
        $this->patient      =   $patient;
    }

    public function index()
    {
        $doctors            =   $this->user->countDoctors();
        $pharmacists        =   $this->user->countPharmacists();
        $nurses             =   $this->user->countNurses();
        $accountants        =   $this->user->countAccountants();
        $laboratorists      =   $this->user->countLaboratorists();
        $receptionists      =   $this->user->countReceptionists();
        $patients           =   $this->patient->countPatients();

        return view('admin.dashboard', compact('doctors', 'pharmacists', 'nurses', 'accountants', 'laboratorists', 'receptionists', 'patients'));
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
        $patients       =   $this->patient->getPatients();
        $paginations    =   Patient::paginate(100);

    	return view('admin.patients', compact('patients', 'paginations'));
    }

    public function addPatient(Request $request)
    {
    	$patients   =   $this->store();
        
        return $patients;
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
