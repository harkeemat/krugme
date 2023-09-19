<?php

namespace App\qualificationModel;

use Illuminate\Database\Eloquent\Model;

class key_skill extends Model
{
    protected $table = 'key_skill';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id','key_skill', 'key_skill_experience'
    ];
}
