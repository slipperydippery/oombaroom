<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Act extends Model
{
    protected $fillable = [
        'title',
        'commentary',
        'user_id',
        'lock_id',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function lock()
    {
        return $this->belongsTo('App\Lock');
    }

    public function scenes()
    {
        return $this->belongsToMany('App\Scene');
    }

    public function funeral()
    {
        return $this->belongsToMany('App\Funeral');
    }
}
