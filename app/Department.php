<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\DepartmentRequest;

class Department extends Model
{
	protected $table = 'departments'; 

    protected $fillable = ['name', 'description',];
}
