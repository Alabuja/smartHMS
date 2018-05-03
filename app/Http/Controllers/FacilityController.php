<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\FacilityRequest;
use Validator;
use App\Department;
use App\Facility;

class FacilityController extends Controller
{
    public function getFacility($id){

        $facilities = Department::join('department_facilities', 'departments.id', '=', 'department_facilities.department_id')
                                        ->where('departments.id', '=', $id)
                                        ->select('departments.*', 'department_facilities.title', 'department_facilities.description', 'department_facilities.department_id', 'department_facilities.*')
                                        ->get();
        $paginations = Facility::paginate(100);
    
        return view('admin.facility', compact('facilities', 'paginations'));
    }

    public function addFacility(Request $request3)
    {

        $this->validate($request3, [
            'title' => 'required',
            'description' => 'min:3',
            'department_id' => 'required',
        ]);
        
        $title = $request3->input('title');
        $description = $request3->input('description');
        $department_id = $request3->input('department_id');

        $facility = new Facility();
        $facility->title = $title;
        $facility->description = $description;
        $facility->department_id = $department_id;

        $facility->save();

        $request3->session()->flash('success', 'New Department Facility Successfully Added');
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

    public function deleteFacility(){
        
    }
}
 