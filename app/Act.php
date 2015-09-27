<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Act extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'name',
    	'comment',
    	'media_id',
    	'user_id',
    	'media_link'
    ];

    protected function user()
    {
    	return $this->$belongsTo('App\User');
    }
}
