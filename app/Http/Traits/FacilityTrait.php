<?php

namespace App\Http\Traits;

use App\DepartmentFacility;
use App\Department;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

trait FacilityTrait{

	public function findDepartmentFacility($id)
	{
		$facility = [
            'facilities' => Department::join('department_facilities', 'departments.id', '=', 'department_facilites.department_id')
                                        ->where('departments.id', $id)
                                        ->select('departments.name', 'department_facilities.title', 'department_facilities.description')
                                        ->get(),
			'paginations' => DepartmentFacility::paginate(100),
		];

		return $facility;
	}

}