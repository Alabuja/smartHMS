<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaboratoristController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('laboratorist.welcome');    
    }

    public function profile()
    {
        return view('laboratorist.profile');
    }

    public function getBloodDonor()
    {
        return view('laboratorist.blood_donor');
    }

    public function getBloodBank()
    {
        return view('laboratorist.blood_bank');
    }

    public function addBloodDonor()
    {
        // Modal
    }


}
