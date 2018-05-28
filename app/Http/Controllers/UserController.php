<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests;
use App\User;
use App\Role;
use App\Department;

class UserController extends Controller
{
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' 				=> 'required|min:6', 
            'email' 			=> 'required|email|unique:users',
            'phone_number' 		=> 'required|unique:users',
            'password' 			=> 'required|min:6',
            'address' 			=> 'nullable|max:200',
            'role' 				=> 'required',
            'department_id' 	=> 'nullable|numeric',
            'profile' 			=> 'nullable',
            'linkedin_url' 		=> 'nullable|url',
            'facebook_url'		=> 'nullable|url',
            'twitter_url' 		=> 'nullable|url',
            'avatar'			=> 'required|mimes:jpg,png,jpeg,gif|between:1,10000',
            'avatar_url'		=> 'required|url',
    	]);

    	$user = new User;

    	$name  				= $user->name;
    	$email 				= $user->email;
    	$phone_number		= $user->phone_number;
    	$password			= $user->password;
    	$address			= $user->address;
    	$role				= $user->role;
    	$department_id		= $user->department_id;
    	$profile			= $user->profile;
    	$linkedin_url		= $user->linkedin_url;
    	$facebook_url		= $user->facebook_url;
    	$twitter_url		= $user->twitter_url;
    	$avatar				= $user->avatar;

    	$user->save();
    	$request->session()->flash('success', ' New user Added!!!');
    	return back();
    }

    public function getOfficial()
    {
    	$user 			=	new User;
    	$role           = new Role;
        $department     = new Department;

        $roles          = $role->roles_details();
        $departments    = $department->fetch_all_departments();
    	$doctors 		= $user->fetch_all_doctors();
    	$pharmacists    = $user->fetch_all_pharmacists();
    	$accountants    = $user->fetch_all_accountants();
    	$nurses  		= $user->fetch_all_nurses();
    	$receptionists  = $user->fetch_all_receptionists();
    	$laboratists    = $user->fetch_all_laboratists();

    	$paginations = User::paginate(100);


    	return view('admin.officials', compact('doctors', 'pharmacists', 'nurses', 'laboratists', 'paginations', 'roles', 'departments', 'receptionists'));
    }

    public function getUsers(Request $request)
    {
    	$user 			=	new User;
    	$role           = new Role;
        $department     = new Department;

        $roles          = $role->roles_details();
        $departments    = $department->fetch_all_departments();
    	$doctors 		= $user->fetch_all_doctors();
    	$pharmacists    = $user->fetch_all_pharmacists();
    	$accountants    = $user->fetch_all_accountants();
    	$nurses  		= $user->fetch_all_nurses();
    	$receptionists  = $user->fetch_all_receptionists();
    	$laboratists    = $user->fetch_all_laboratists();

    	$paginations = User::paginate(100);

    	$nurses = view('admin.users', compact('doctors', 'pharmacists', 'nurses', 'laboratists', 'paginations', 'roles', 'departments', 'receptionists'))->render();
    	return response()->json(
                [
                'booking_response_html'    => $nurses
                ]
            );
    }
}
