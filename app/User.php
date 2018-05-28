<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone_number', 'password', 'address', 'role', 
        'department_id', 'profile', 'linkedin_url',
        'facebook_url', 'twitter_url', 'avatar', 'avatar_url', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isRole(){
      return $this->role; // mysql table column
    }

    public function department(){
        return $this->belongsTo('App\Department', 'department_id');
    }

    public function fetch_all_doctors(){
        
        $doctors  = self::select('*')
                        ->where('role','=','doctor')
                        ->get();

        return $doctors;
    }
    public function fetch_all_pharmacists(){
        
        $pharmacists  = self::select('*')
                        ->where('role', 'pharmacist')
                        ->get();

        return $pharmacists;
    }

    public function fetch_all_accountants(){
        
        $accountants  = self::select('*')
                        ->where('role', '=', 'accountant')
                        ->get();

        return $accountants;
    }
    public function fetch_all_nurses(){
        
        $nurses  = self::select('*')
                        ->where('role', '=', 'nurse')
                        ->get();

        return $nurses;
    }

    public function fetch_all_receptionists(){
        
        $receptionists  = self::select('*')
                        ->where('role', 'receptionist')
                        ->get();

        return $receptionists;
    }
    public function fetch_all_laboratists(){
        
        $laboratists  = self::select('*')
                        ->where('role', 'laboratist')
                        ->get();

        return $laboratists;
    }

    // public function hasAccess(array $permissions)
    // {
    //    foreach($this->roles as $role){
    //         if($role->hasAccess($permissions)){
    //             return true;
    //         }
    //    }
    //    return false;
    // }

    // public function inRole($roleSlug)
    // {
    //     return $this->roles()->where('slug',$roleSlug)->count()==1;
    // }
}
