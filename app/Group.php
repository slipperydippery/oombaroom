<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function owner()
    {
        return $this->belongsTo('App\User');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
