<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    protected $table = 'users';
    use Notifiable;

    public static $roles = [];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'surname', 'phone', 'facebook_id', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
    public function getRole()
    {
        return $this->role();
    }

    public function hasRole(array $roles)
    {
        foreach($roles as $role)
        {
            if(isset(self::$roles[$role]))
            {
                if(self::$roles[$role]) return true;
            }
            else
            {
                self::$roles[$role] = $this->roles()->where('name', $role)->exists();

                if(self::$roles[$role]) return true;
            }
        }
        return false;
    }
    public function orders()
    {
        return $this->hasMany('App\Order', 'user_id');
    }
    public function get_role()
    {
        return $this->hasOne('App\Role', 'id');
    }

}
