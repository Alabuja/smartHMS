<?php

namespace App;

use App\Notifications\PatientResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
	use Notifiable;

    protected $table = 'patients';

    protected $fillable = [
    	'name', 'email', 'phone_number', 'password', 'address', 'birth_date', 'blood_group', 'genotype' ,'sex', 'avatar_url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PatientResetPassword($token));
    }

    public function countPatients()
    {
        $patients   =   self::whereNotNull('name')->count();

        return $patients;
    }

    public function getPatients()
    {
        $patients   =   self::whereNotNull('name')->get();

        return $patients;
    }
}
