<?php

namespace App\qualificationModel;

use Illuminate\Database\Eloquent\Model;

class education_detail extends Model
{
    protected $table = 'education_detail';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id','highest_qualification', 'edu_specialized', 'institute_name','higher_passout_year', 'higher_course_type'
    ];

}
