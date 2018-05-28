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

    protected $dates = ['deleted_at'];
    
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
}
