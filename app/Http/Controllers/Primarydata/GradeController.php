<?php

namespace App\Http\Controllers\Primarydata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Grade;

use View;

class GradeController extends Controller
{
    
    public function index()
    {
        $grades  = Grade::all();
        return View::make('primarydata.grade.view_grade', array('grades' => $grades));
    }

    
    public function create()
    {
        return view('primarydata.grade.add_grade');
    }

    
    public function store(Request $request)
    {
        $grade = new Grade;

        $grade->grade  = $request->grade;

        if($grade->save()){
             return redirect('create-grade?save=success==true')->with('success', 'Grade was successfully added');
        }
        else{
            return redirect('create-grade?save=success==false')->with('success', 'Grade was not successfully added');
        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $grade = Grade::where('grades_id' , '=', $id)->first(); 
        return View::make('primarydata.grade.edit_grade', array('grade' => $grade));
    }

    
    public function update(Request $request)
    {
        $grade = Grade::where('grades_id' , '=', $request->grades_id)->first();

        $grade->grade  = $request->grade;

        if($grade->save()){
            return redirect('edit-grade/'.$request->grades_id.'?save=success==true')->with('success', 'Grade was successfully updated');
        }
        else{
            return redirect('edit-grade/'.$request->grades_id.'?save=success==false')->with('success', 'Grade was not successfully updated');
        }
    }

    
    public function destroy($id)
    {
        $grade = Grade::where('grades_id' , '=', $id)->first();  
        
        $grade->deleted = 1;
        
        if($grade->save()){
             return redirect('view-grade/?delete=success==true')->with('success', 'Grade was successfully deleted');
        }
        else{
            return redirect('view-grade/?delete=success==false')->with('success', 'Grade was not successfully deleted');
        }
    }
}
