<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\FacilityRequest;
use Validator;
use App\Department;
use App\Facility;
use Illuminate\Pagination\LengthAwarePaginator;
  
class FacilityController extends Controller
{
    public function __construct(Department $department)
    {
        $this->department   =   $department;
    }

    public function getFacility($id){

        $facilities     =   $this->department->getDepartment($id);

        $paginations = Facility::paginate(100);
    
        return view('admin.facility', compact('facilities', 'paginations'));
    }

    public function addFacility(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'min:3',
            'department_id' => 'required',
        ]);
        
        $title = $request->input('title');
        $description = $request->input('description');
        $department_id = $request->input('department_id');

        $facility = new Facility();
        $facility->title = $title;
        $facility->description = $description;
        $facility->department_id = $department_id;

        $facility->save();

        $request->session()->flash('success', 'New Department Facility Successfully Added');
        return back();

    } 

    public function editFacility($id){ 
        $editFacilities = Facility::find($id);

        return view('admin.editfacility', compact('editFacilities'));
    }

    public function updateFacilities(Request $request, $id){
        $updateFacility = Facility::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'min:3',
            'department_id' => 'required|numeric',
        ]);

        $updateFacility->fill($request->all())->save();
        $request->session()->flash('success', 'Facilities Updated Successfully');
        return back();
    }

    public function deleteFacility(){
        
    }
}
 