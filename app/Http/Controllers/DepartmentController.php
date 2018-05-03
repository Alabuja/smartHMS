<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DepartmentRequest;
use App\Http\Traits\DepartmentTrait;
use App\Department;

class DepartmentController extends Controller
{
    use DepartmentTrait;
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

    public function deleteDepartment(){
        
    }
} 
