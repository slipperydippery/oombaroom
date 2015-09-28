<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function act()
    {
        return $this->belongsTo('App\Act');
    }

    public function lock()
    {
        return $this->belongsTo('App\Lock');
    }
}
