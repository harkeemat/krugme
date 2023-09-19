<?php

namespace App\qualificationModel;

use Illuminate\Database\Eloquent\Model;

class previous_experience extends Model
{
    protected $table = 'previous_experience';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id','pre_job_title', 'pre_company_name', 'pre_industry','pre_functional_area', 'start_pre_duration', 'end_pre_duration','pre_employer','pre_total_exp','pre_salary'
    ];
}
