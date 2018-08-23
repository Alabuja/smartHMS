<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Http\Requests\FacilityRequest;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facility extends Model
{
    use SoftDeletes;

    protected $table = 'department_facilities';

    protected $fillable = ['title', 'description', 'department_id',];

    public function department(){
        return $this->belongsTo('App\Department', 'department_id');
    }
}
