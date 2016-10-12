<?php

namespace App\Http\Controllers\Primarydata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Medium;

use View;

class MediumController extends Controller
{
    
    public function index()
    {
        $mediums  = Medium::all();
        return View::make('primarydata.medium.view_medium', array('mediums' => $mediums));
    }

    
    public function create()
    {
        return view('primarydata.medium.add_medium');
    }

    
    public function store(Request $request)
    {
        $medium = new Medium;

        $medium->mdmname  = $request->mdmname;

        if($medium->save()){
             return redirect('create-medium?save=success==true')->with('success', 'Medium was successfully added');
        }
        else{
            return redirect('create-medium?save=success==false')->with('success', 'Medium was not successfully added');
        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $medium = Medium::where('mdm_id' , '=', $id)->first(); 
        return View::make('primarydata.medium.edit_medium', array('medium' => $medium));
    }

    
    public function update(Request $request)
    {
        $medium = Medium::where('mdm_id' , '=', $request->mdm_id)->first();

        $medium->mdmname  = $request->mdmname;

        if($medium->save()){
            return redirect('edit-medium/'.$request->mdm_id.'?save=success==true')->with('success', 'Medium was successfully updated');
        }
        else{
            return redirect('edit-medium/'.$request->mdm_id.'?save=success==false')->with('success', 'Medium was not successfully updated');
        }
    }

    
    public function destroy($id)
    {
        $medium = Medium::where('mdm_id' , '=', $id)->first();  
        
        $medium->deleted = 1;
        
        if($medium->save()){
             return redirect('view-medium/?delete=success==true')->with('success', 'Medium was successfully deleted');
        }
        else{
            return redirect('view-medium/?delete=success==false')->with('success', 'Medium was not successfully deleted');
        }
    }
}
