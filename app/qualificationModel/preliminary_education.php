<?php

namespace App\qualificationModel;

use Illuminate\Database\Eloquent\Model;

class preliminary_education extends Model
{
    protected $table = 'preliminary_education';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id','pre_qualification', 'pre_edu_specialized', 'pre_institute','pre_country', 'pre_state', 'pre_distt','pre_passout_year','pre_course_type'
    ];

}
