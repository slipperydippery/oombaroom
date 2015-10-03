<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
	protected $fillable = [
		'name',
		'email',
		'phone_mob',
		'phone_home',
		'adress_street',
		'adress_city',
		'adress_postalcode',
		'adress_country',
		'note',
		'owner_id',
		'user_id',
	];

    public function owner()
    {
    	return $this->belongsTo('App\User', 'owner_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function setUserIdAttribute($value)
    {
        $this->attributes['user_id'] = $value ?: null;
    }
}
