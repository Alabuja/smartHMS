<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('accountant.welcome');    
    }

    public function profile()
    {
        return view('accountant.profile');
    }

    public function getInvoice()
    {
        return view('accountant.invoice_add');
    }

    public function addNewInvoice()
    {
    	
    }

    public function getInvoiceManage()
    {
    	return view('accountant.invoice_manage');	
    }
}
