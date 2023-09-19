<?php

namespace App\qualificationModel;

use Illuminate\Database\Eloquent\Model;

class describe_yourself extends Model
{
    protected $table = 'describe_yourself';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id','describe_yourself'
    ];
}
