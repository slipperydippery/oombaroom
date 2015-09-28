<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Act extends Model
{
    protected $fillable = [
    	'name',
    	'comment',
    	'media_id',
    	'user_id',
    	'media_link'
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
        return $this->hasMany('App\Scene');
    }

    public function funeral()
    {
        return $this->belongsToMany('App\Funeral');
    }
}
