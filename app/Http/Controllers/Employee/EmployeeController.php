<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Employee\EmployeeDetailsControlelr;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Employee;

use View;

class EmployeeController extends Controller
{
    
    public function index()
    {        
        $employees = Employee::joinall();
        return View::make('employee.enrollment.view_employee', array('employees' => $employees));
    }

    
    public function create()
    {
        return View::make('employee.enrollment.add_employee');
    }

    public function store(Request $request)
    {
        $employee = new Employee;
        
        $employee->emp_nic                 = $request->emp_nic;
        $employee->emp_age                 = $request->emp_age;
        $employee->emp_gender              = $request->emp_gender;
        $employee->emp_dobday              = $request->emp_dobday;
        $employee->emp_dobmonth            = $request->emp_dobmonth;
        $employee->emp_dobyear             = $request->emp_dobyear;
        $employee->emp_email               = $request->emp_email;
        $employee->emp_telhome             = $request->emp_telhome;
        $employee->emp_telmobile           = $request->emp_telmobile;
        $employee->emp_relationshipstatus  = $request->emp_relationshipstatus;
        
        $employee->emp_index               = $request->emp_index;
        $employee->emp_departmentid        = $request->emp_departmentid;
        $employee->emp_designationid       = $request->emp_designationid;
        $employee->emp_joined              = $request->emp_joined;
        $employee->emp_otheroccupations    = $request->emp_otheroccupations;
        
        if($employee->save()){
            $request->emp_id = $employee->id;
            
            if(EmployeeDetailsController::store($request)){
            return redirect('create-employee?save=success==true')->with('success', 'Employee was successfully added');
            }
            else{
            return redirect('create-employee?save=success==false')->with('success', 'Employee was not successfully added');
            }
            
        }
        else{
            return redirect('create-employee?save=success==false')->with('success', 'Employee was not successfully added');
        }
        
        
    }

    public function show($id)
    {
        
    }

  
    public function edit($id)
    {
        $employee = Employee::joinwhere($id);
        return View::make('employee.enrollment.edit_employee', array('employee' => $employee));
        
    }
    
   
    public function update(Request $request)
    {
        $employee = Employee::where('id' , '=', $request->id)->first();  
        
        $employee->emp_nic                 = $request->emp_nic;
        $employee->emp_age                 = $request->emp_age;
        $employee->emp_gender              = $request->emp_gender;
        $employee->emp_dobday              = $request->emp_dobday;
        $employee->emp_dobmonth            = $request->emp_dobmonth;
        $employee->emp_dobyear             = $request->emp_dobyear;
        $employee->emp_email               = $request->emp_email;
        $employee->emp_telhome             = $request->emp_telhome;
        $employee->emp_telmobile           = $request->emp_telmobile;
        $employee->emp_relationshipstatus  = $request->emp_relationshipstatus;
        
        $employee->emp_index               = $request->emp_index;
        $employee->emp_departmentid        = $request->emp_departmentid;
        $employee->emp_designationid       = $request->emp_designationid;
        $employee->emp_joined              = $request->emp_joined;
        $employee->emp_left                = $request->emp_left;
        $employee->emp_otheroccupations    = $request->emp_otheroccupations;
        
        
        if($employee->save()){
             return redirect('edit-employee/'.$request->id.'?save=success==true')->with('success', 'Employee was successfully updated');
        }
        else{
            return redirect('edit-employee/'.$request->id.'?save=success==false')->with('success', 'Employee was not successfully updated');
        }
    }

    public function destroy($id)
    {
        $employee = Employee::where('id' , '=', $id)->first();  
        
        $employee->deleted = 1;
        
        if($employee->save()){
             return redirect('view-employee/?delete=success==true')->with('success', 'Employee was successfully deleted');
        }
        else{
            return redirect('view-employee/?delete=success==false')->with('success', 'Employee was not successfully deleted');
        }
    }
}
