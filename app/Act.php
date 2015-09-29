<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Act extends Model
{
    protected $fillable = [
    	'name',
    	'commentary',
    	'media_id',
    	'user_id',
        'lock_id',
    	'media_link',
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
        return $this->hasMany('App\Scene');
    }

    public function funeral()
    {
        return $this->belongsToMany('App\Funeral');
    }
}
