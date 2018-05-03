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
}
