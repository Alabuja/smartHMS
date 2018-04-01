<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
    	'category_name', 'description',
    ];


    public function users()
    {
        return $this->belongsToMany('App\User', 'category_role', 'category_id', 'user_id');
    }
}
