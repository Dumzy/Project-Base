<?php

namespace App\Http\Controllers\Primarydata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\City;

use View;

class CityController extends Controller
{
    
    public function index()
    {
        $cities  = City::all();
        return View::make('primarydata.city.view_city', array('cities' => $cities));
    }

    
    public function create()
    {
        return view('primarydata.city.add_city');
    }

    
    public function store(Request $request)
    {
        $city = new City;

        $city->cityname  = $request->cityname;

        if($city->save()){
             return redirect('create-city?save=success==true')->with('success', 'City was successfully added');
        }
        else{
            return redirect('create-city?save=success==false')->with('success', 'City was not successfully added');
        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $city = City::where('city_id' , '=', $id)->first(); 
        return View::make('primarydata.city.edit_city', array('city' => $city));
    }

    
    public function update(Request $request)
    {
        $city = City::where('city_id' , '=', $request->city_id)->first();

        $city->cityname  = $request->cityname;

        if($city->save()){
            return redirect('edit-city/'.$request->city_id.'?save=success==true')->with('success', 'City was successfully updated');
        }
        else{
            return redirect('edit-city/'.$request->city_id.'?save=success==false')->with('success', 'City was not successfully updated');
        }
    }

    
    public function destroy($id)
    {
        $city = City::where('city_id' , '=', $id)->first();  
        
        $city->deleted = 1;
        
        if($city->save()){
             return redirect('view-city/?delete=success==true')->with('success', 'City was successfully deleted');
        }
        else{
            return redirect('view-city/?delete=success==false')->with('success', 'City was not successfully deleted');
        }
    }
}
