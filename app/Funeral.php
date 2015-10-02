<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funeral extends Model
{
    protected $fillable = [
        'title',
        'commentary',
        'quote',
        'ceremony',
        'burial_type',
        'location',
        'casket',
        'song_name',
        'song_id',
        'song_link',
        'picture_id',
        'picture_link',
        'picture_alt',
        'active',
        'user_id',
        'lock_id'
    ];

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
