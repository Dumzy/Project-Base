<?php

namespace App\Http\Controllers\Primarydata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\School;

use View;

class SchoolController extends Controller
{
    
    public function index()
    {
        $schools  = School::all();
        return View::make('primarydata.school.view_school', array('schools' => $schools));
    }

    
    public function create()
    {
        return view('primarydata.school.add_school'); 
    }

    
    public function store(Request $request)
    {
        $school = new School;

        $school->schoolname  = $request->schoolname;

        if($school->save()){
             return redirect('create-school?save=success==true')->with('success', 'School was successfully added');
        }
        else{
            return redirect('create-school?save=success==false')->with('success', 'School was not successfully added');
        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $school = School::where('school_id' , '=', $id)->first(); 
        return View::make('primarydata.school.edit_school', array('school' => $school));
    }

    
    public function update(Request $request)
    {
        $school = School::where('school_id' , '=', $request->school_id)->first();

        $school->schoolname  = $request->schoolname;

        //var_dump($school);

        if($school->save()){
            return redirect('edit-school/'.$request->school_id.'?save=success==true')->with('success', 'School was successfully updated');
        }
        else{
            return redirect('edit-school/'.$request->school_id.'?save=success==false')->with('success', 'School was not successfully updated');
        }
    }

    
    public function destroy($id)
    {
        $school = School::where('school_id' , '=', $id)->first();  
        
        $school->deleted = 1;
        
        if($school->save()){
             return redirect('view-school/?delete=success==true')->with('success', 'School was successfully deleted');
        }
        else{
            return redirect('view-school/?delete=success==false')->with('success', 'School was not successfully deleted');
        }
    }
}
