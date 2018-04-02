<?php

namespace App\Http\Traits;

use App\Department;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

trait DepartmentTrait{

	public function findDepartment()
	{
		$department = [
			'departments' => Department::all(),
			'paginations' => Department::paginate(100),
		];

		return $department;
	}

}