<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speech extends Model
{
    protected $fillable = [
        'speaker',
        'topic',
        'excerpt',
        'minutes',
    ];
    public function scenes()
    {
        return $this->morphMany('App\Scene', 'sceneable');
    }
}
