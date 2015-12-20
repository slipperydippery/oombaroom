<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    protected $fillable = [
        'title',
        'commentary',
        'sceneable_id',
        'sceneable_type',
        'user_id',
        'lock_id',
        'created_at',
        'updated_at',
    ];

    public function sceneable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function acts()
    {
        return $this->belongsToMany('App\Act');
    }

    public function lock()
    {
        return $this->belongsTo('App\Lock');
    }
}
