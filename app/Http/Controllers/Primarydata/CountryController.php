<?php

namespace App\Http\Controllers\Primarydata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Country;

use View;

class CountryController extends Controller
{
    
    public function index()
    {
        $countries  = Country::all();
        return View::make('primarydata.country.view_country', array('countries' => $countries));
    }

    
    public function create()
    {
        return view('primarydata.country.add_country');
    }

    
    public function store(Request $request)
    {
        $country = new Country;

        $country->ctryname  = $request->ctryname;

        if($country->save()){
             return redirect('create-country?save=success==true')->with('success', 'Country was successfully added');
        }
        else{
            return redirect('create-country?save=success==false')->with('success', 'Country was not successfully added');
        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $country = Country::where('country_id' , '=', $id)->first(); 
        return View::make('primarydata.country.edit_country', array('country' => $country));
    }

    
    public function update(Request $request)
    {
        $country = Country::where('country_id' , '=', $request->country_id)->first();

        $country->ctryname  = $request->ctryname;

        if($country->save()){
            return redirect('edit-country/'.$request->country_id.'?save=success==true')->with('success', 'Country was successfully updated');
        }
        else{
            return redirect('edit-country/'.$request->country_id.'?save=success==false')->with('success', 'Country was not successfully updated');
        }
    }

    
    public function destroy($id)
    {
        $country = Country::where('country_id' , '=', $id)->first();  
        
        $country->deleted = 1;
        
        if($country->save()){
             return redirect('view-country/?delete=success==true')->with('success', 'Country was successfully deleted');
        }
        else{
            return redirect('view-country/?delete=success==false')->with('success', 'Country was not successfully deleted');
        }
    }
}
