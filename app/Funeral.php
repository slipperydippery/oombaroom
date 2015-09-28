<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funeral extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function acts()
    {
        return $this->hasMany('App\Act');
    }

    public function lock()
    {
        return $this->belongsTo('App\Lock');
    }
}
