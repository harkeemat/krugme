<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class krug_group extends Model
{
    protected $table = 'krug_group';
    protected $fillable = ['group_name','slug'];
}
