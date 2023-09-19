<?php

namespace App;
use Hootlex\Friendships\Models\FriendshipGrouped;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hootlex\Friendships\Traits\Friendable;
use App\Http\Controllers\Friendship\Groupable;
class User extends Authenticatable
{
    use Notifiable;
    use Friendable;
    use Groupable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','provider_id', 'provider', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
