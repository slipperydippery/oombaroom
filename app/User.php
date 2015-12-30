<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function friends()
    {
        return $this->belongsToMany('App\User');
    }

    public function acts()
    {
        return $this->hasMany('App\Act');
    }

    public function scenes()
    {
        return $this->hasMany('App\Scene');
    }

    public function locks()
    {
        return $this->hasMany('App\Lock');
    }

    public function groups()
    {
        return $this->belongsToMany('App\Group');
    }

    public function own_groups()
    {
        return $this->hasMany('App\Group');
    }

    public function funerals()
    {
        return $this->hasMany('App\Funeral');
    }

    public function own_guests()
    {
        return $this->hasMany('App\Guest', 'owner_id');
    }

    public function guest()
    {
        return $this->hasMany('App\Guest');
    }
}
