<?php

namespace App\Http\Controllers;

use App\Company;
use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
    	$stores = Store::all();
    	return view('store.index', compact('stores'));
    }

    public function edit(Store $store)
    {
    	$companies = Company::all();
    	return view('store.edit', compact('stores', 'companies'));
    }
    public function update(Store $store)
    {
        $validated_credentials = request()->validate([
        	'company_id' => 'required',
        	'name' => 'required',
        	'products' => 'required'
        ]);

        $stores->update($validated_credentials);

        return redirect('/store');
    }
}
