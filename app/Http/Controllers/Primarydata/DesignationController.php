<?php

namespace App\Http\Controllers\Primarydata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Designation;

use View;

class DesignationController extends Controller
{
    
    public function index()
    {
        $designations  = Designation::all();
        return View::make('primarydata.designation.view_designation', array('designations' => $designations));
    }

    
    public function create()
    {
        return view('primarydata.designation.add_designation');
    }

    
    public function store(Request $request)
    {
        $designation = new Designation;

        $designation->designame  = $request->designame;

        if($designation->save()){
             return redirect('create-designation?save=success==true')->with('success', 'Designation was successfully added');
        }
        else{
            return redirect('create-designation?save=success==false')->with('success', 'Designation was not successfully added');
        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $designation = Designation::where('desig_id' , '=', $id)->first(); 
        return View::make('primarydata.designation.edit_designation', array('designation' => $designation));
    }

    
    public function update(Request $request)
    {
        $designation = Designation::where('desig_id' , '=', $request->desig_id)->first();

        $designation->designame  = $request->designame;

        if($designation->save()){
            return redirect('edit-designation/'.$request->desig_id.'?save=success==true')->with('success', 'Designation was successfully updated');
        }
        else{
            return redirect('edit-designation/'.$request->desig_id.'?save=success==false')->with('success', 'Designation was not successfully updated');
        }
    }

    
    public function destroy($id)
    {
        $designation = Designation::where('desig_id' , '=', $id)->first();  
        
        $designation->deleted = 1;
        
        if($designation->save()){
             return redirect('view-designation/?delete=success==true')->with('success', 'Designation was successfully deleted');
        }
        else{
            return redirect('view-designation/?delete=success==false')->with('success', 'Designation was not successfully deleted');
        }
    }
}
