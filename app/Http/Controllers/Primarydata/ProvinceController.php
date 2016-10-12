<?php

namespace App\Http\Controllers\Primarydata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Province;

use View;

class ProvinceController extends Controller
{
    
    public function index()
    {
        $provinces  = Province::all();
        return View::make('primarydata.province.view_province', array('provinces' => $provinces));
    }

    
    public function create()
    {
        return view('primarydata.province.add_province');
    }

    
    public function store(Request $request)
    {
        $province = new Province;

        $province->proname  = $request->proname;

        if($province->save()){
             return redirect('create-province?save=success==true')->with('success', 'Province was successfully added');
        }
        else{
            return redirect('create-province?save=success==false')->with('success', 'Province was not successfully added');
        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $province = Province::where('province_id' , '=', $id)->first(); 
        return View::make('primarydata.province.edit_province', array('province' => $province));
    }

    
    public function update(Request $request)
    {
        $province = Province::where('province_id' , '=', $request->province_id)->first();

        $province->proname  = $request->proname;

        if($province->save()){
            return redirect('edit-province/'.$request->province_id.'?save=success==true')->with('success', 'Province was successfully updated');
        }
        else{
            return redirect('edit-province/'.$request->province_id.'?save=success==false')->with('success', 'Province was not successfully updated');
        }
    }

    
    public function destroy($id)
    {
        $province = Province::where('province_id' , '=', $id)->first();  
        
        $province->deleted = 1;
        
        if($province->save()){
             return redirect('view-province/?delete=success==true')->with('success', 'Province was successfully deleted');
        }
        else{
            return redirect('view-province/?delete=success==false')->with('success', 'Province was not successfully deleted');
        }
    }
}
