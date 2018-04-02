<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NurseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('nurse.welcome');    
    }

    public function profile()
    {
        return view('nurse.profile');
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

    public function getBloodDonor()
    {
        return view('nurse.blood_donor');
    }

    public function getBloodBank()
    {
        return view('nurse.blood_bank');
    }

    public function getBedAllotment()
    {
        return view('nurse.bed_allotment');
    }

    public function addBedAllotment()
    {
        # Should be a modal
    }

    public function getBed()
    {
        return view('nurse.bed');
    }

    public function addBed()
    {
        # Should be a modal
    }
}
