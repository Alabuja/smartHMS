<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\FacilityRequest;

class Facility extends Model
{
    protected $table = 'department_facilities';

    protected $fillable = ['title', 'description', 'department_id'];

    public function department(){
        return $this->belongsTo('App\Department', 'department_id');
    }
}
