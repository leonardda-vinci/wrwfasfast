<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function company()
    {
    	return $this->belongsTo(Company::class);
    }

    public function open_times()
    {
    	return $this->hasMany(OpenTime::class);
    }
}
