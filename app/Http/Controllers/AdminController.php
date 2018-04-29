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
    use DepartmentTrait;

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

        $department = $this->findDepartment();

        return view('admin.department', $department);
    }

    public function addDepartment(DepartmentRequest $departmentRequest)
    {
        
        Department::create($departmentRequest->validated());

        $departmentRequest->session()->flash('success', 'New Department Successfully Created');
        return back();

        //return back();
    }

    public function editDepartment($id){
        $editDepartments = Department::find($id);

        return view('admin.editdepartment', compact('editDepartments'));
    }

    public function updateDepartment(Request $request, $id){
        $updateDepartment = Department::findOrFail($id);

        $this->validate($request,[
            'name' => 'required',
            'description' => 'min:3'
        ]);

        $updateDepartment->fill($request->all())->save();
        $request->session()->flash('success', 'Updated Departments!!!');

        return back();

    }

    /**
    *   End Department
    */

    /**
    *   Department Facility
    */

    public function getFacility($id){

        $facilities = Department::join('department_facilities', 'departments.id', '=', 'department_facilities.department_id')
                                        ->where('departments.id', '=', $id)
                                        ->select('departments.name', 'department_facilities.title', 'department_facilities.description', 'department_facilities.department_id', 'department_facilities.*')
                                        ->get();
        $paginations = Facility::paginate(100);
    
        return view('admin.facility', compact('facilities', 'paginations'));
    }

    public function addFacility(FacilityRequest $facilitiesRequest)
    {
        Facility::create($facilitiesRequest->validated());

        $facilitiesRequest->session()->flash('success', 'New Department Facility Successfully Added');
        return back();

    }

    public function editFacility($id){
        $editFacilities = Facility::find($id);

        return view('admin.editfacility', compact('editFacilities'));
    }

    public function updateFacilities(Request $request2, $id){
        $updateFacility = Facility::findOrFail($id);

        $this->validate($request2, [
            'title' => 'required',
            'description' => 'min:3',
            'department_id' => 'required|numeric',
        ]);

        $updateFacility->fill($request2->all())->save();
        $request2->session()->flash('success', 'Facilities Updated Successfully');
        return back();
    } 

    // public function store(UsersRequest $request)
    // {
    	
    // }

}
