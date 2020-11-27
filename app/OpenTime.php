<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenTime extends Model
{
	protected $guard = [];

    public function stores()
    {
    	return $this->belongsTo(Store::class);
    }
}
