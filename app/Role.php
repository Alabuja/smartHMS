<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    public function users()
    {
    	return $this->belongsToMany(User::class,'role_users');
    }

    public function roles_details()
    {

       $roles = self::all();

       return $roles;
    }
}
