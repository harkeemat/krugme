<?php

namespace App\qualificationModel;

use Illuminate\Database\Eloquent\Model;

class personal_detail extends Model
{
     
	protected $table = 'personal_detail';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id','aadhar_no', 'first_name', 'middle_name','last_name', 'gender','dob', 'place_of_birth', 'current_location','country','mobile_no','profile'
    ];
    

}
