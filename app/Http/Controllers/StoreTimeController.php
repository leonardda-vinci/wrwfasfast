<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class StoreTimeController extends Controller
{
    public function store(Store $store)
    {
    	$validated_credentials = request()->validate([
    		'open_time' => 'required',
    		'close_time' => 'required'
    	]);
    	$store->open_times()->create($validated_credentials);

    	return redirect('/store/'.$store->id.'/edit');
    }
}
