<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lock extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function acts()
    {
        return $this->hasMany('App\Act');
    }

    public function scenes()
    {
        return $this->hasMany('App\Scene');
    }

    public function funerals()
    {
        return $this->hasMany('App\Funeral');
    }
}
