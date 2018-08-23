<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\DepartmentRequest;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;
    
	protected $table = 'departments'; 

    protected $fillable = ['name', 'description',];
    
    public function facility(){
        return $this->hasMany('App\Facility');
    }
    public function user(){
        return $this->hasMany('App\User');
    }

    public function fetch_all_departments()
    {
    	$departments = self::all();

    	return $departments;
    }

    public function getDepartment($id)
    {
        $facilities = self::join('department_facilities', 'departments.id', '=', 'department_facilities.department_id')
                            ->where('departments.id', '=', $id)
                            ->select('departments.*', 'department_facilities.title', 'department_facilities.description', 'department_facilities.department_id', 'department_facilities.*')
                            ->get();
        return $facilities;
    }
}
