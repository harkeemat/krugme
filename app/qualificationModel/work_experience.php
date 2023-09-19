<?php

namespace App\qualificationModel;

use Illuminate\Database\Eloquent\Model;

class work_experience extends Model
{
    protected $table = 'work_experience';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id','position_level', 'currently_working', 'work_job_title','work_company_name', 'work_industry', 'work_functional_area','work_employer','current_salary_annual','start_work_duration','end_work_duration'
    ];
}
