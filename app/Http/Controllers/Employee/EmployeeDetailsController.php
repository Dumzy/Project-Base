<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\EmployeeDetails;


class EmployeeDetailsController extends Controller
{
    
    public static function store(Request $request)
    {
        $employee = new EmployeeDetails;
        
        $employee->emp_title        = $request->emp_title;
        $employee->emp_fullname     = $request->emp_fullname;
        $employee->emp_firstname    = $request->emp_firstname;
        $employee->emp_middlename   = $request->emp_middlename;
        $employee->emp_lastname     = $request->emp_lastname;
        $employee->emp_addressline1 = $request->emp_addressline1;
        $employee->emp_addressline2 = $request->emp_addressline2;
        $employee->emp_addressline3 = $request->emp_addressline3;
        $employee->emp_city         = $request->emp_city;
        $employee->emp_district     = $request->emp_district;
        $employee->emp_province     = $request->emp_province;
        $employee->emp_country      = $request->emp_country;
        $employee->emp_id           = $request->emp_id;
       
        
        if($employee->save()){
             return true;
        }
        else{
            return false;
        }
        
        
    }
    
    public function update(Request $request)
    {
        $employee = EmployeeDetails::where('emp_id' , '=', $request->id)->first();  
        
        
        $employee->emp_title        = $request->emp_title;
        $employee->emp_fullname     = $request->emp_fullname;
        $employee->emp_firstname    = $request->emp_firstname;
        $employee->emp_middlename   = $request->emp_middlename;
        $employee->emp_lastname     = $request->emp_lastname;
        $employee->emp_addressline1 = $request->emp_addressline1;
        $employee->emp_addressline2 = $request->emp_addressline2;
        $employee->emp_addressline3 = $request->emp_addressline3;
        $employee->emp_city         = $request->emp_city;
        $employee->emp_district     = $request->emp_district;
        $employee->emp_province     = $request->emp_province;
        $employee->emp_country      = $request->emp_country;
       
        
        if($employee->save()){
             return redirect('edit-employee/'.$request->id.'?save=success==true')->with('success', 'Employee was successfully updated');
        }
        else{
            return redirect('edit-employee/'.$request->id.'?save=success==false')->with('success', 'Employee was not successfully updated');
        }
        
        
    }
    


}
