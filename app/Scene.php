<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    protected $fillable = [
        'title',
        'artist',
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

    public function acts()
    {
        return $this->belongsToMany('App\Act');
    }

    public function lock()
    {
        return $this->belongsTo('App\Lock');
    }
}
