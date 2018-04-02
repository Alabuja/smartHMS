<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pharmacist.welcome');    
    }

    public function profile()
    {
        return view('pharmacist.profile');
    }

    public function getMedicineCategory()
    {
        return view('pharmacist.medicine_category');
    }

    public function addMedicineCategory()
    {
    	
    }

    public function getMedicine()
    {
        return view('pharmacist.medicine');
    }

    public function addMedicine()
    {
        // Modal
    }

    public function getMedicineSale()
    {
    	return view('pharmacist.medicine_sale');
    }

    public function addMedicineSale()
    {
        // Modal
    }

}
