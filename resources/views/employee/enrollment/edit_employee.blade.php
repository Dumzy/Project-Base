@extends('system.layouts.baselayout')

@section('content')
	<div class="page-title">
    	<div class="title_left">
   			<h3>Edit EMPLOYEE</h3>
 		</div>
 		<div align="right">
        <a href="{{ URL::to('view-employee') }}" class="btn btn-primary btn-sm">EMPLOYEES</a>
        <a href="{{ URL::to('delete-employee/'.$employee->id) }}" class="btn btn-primary btn-sm btn-red">DELETE</a>
        </div>
	</div>
          
	<form action="{{ URL::to('update-employee-details') }}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
	
    {{ csrf_field() }} 
    
    <div class="row">            
  		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel">
      			<div class="x_title">
        			<div class="clearfix" align="left"><b>EMPLOYEE PRIMARY DATA</b></div>
     			</div>
     			<div class="x_content">
        			<div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            			<label class="control-label">TITLE</label>
             			{{ Form::select(
                        'emp_title',
                        array('' => 'Select Title','Mr.' => 'Mr.','Mrs.' => 'Mrs.', 'Miss' => 'Miss', 'Ms.' => 'Ms.', 'Prof.' => 'Prof.', 'Rev.' => 'Rev.'),
                        $employee->emp_title,
                        array('class' => 'form-control','required' => 'required')
                        ) 
                        }}
          			</div>
          			<div class="col-md-8 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">FULL NAME</label>
                        <input type="text" class="form-control" name="emp_fullname" value="{{$employee->emp_fullname}}" required>
                    </div>
        			</div>
                    
                    <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">FIRST NAME</label>
                        <input type="text" class="form-control" value="{{$employee->emp_firstname}}" name="emp_firstname">
                    </div>
            
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">MIDDLE NAME</label>
                        <input type="text" class="form-control" name="emp_middlename" value="{{$employee->emp_middlename}}">
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">LAST NAME</label>
                        <input type="text" class="form-control" name="emp_lastname" value="{{$employee->emp_lastname}}" required>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">ADDRESS LINE 1</label>
                        <input type="text" class="form-control" name="emp_addressline1" value="{{$employee->emp_addressline1}}" required>
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">ADDRESS LINE 2</label>
                        <input type="text" class="form-control" name="emp_addressline2" value="{{$employee->emp_addressline2}}">
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">ADDRESS LINE 3</label>
                        <input type="text" class="form-control" name="emp_addressline3" value="{{$employee->emp_addressline3}}">
                    </div>   
                    </div>
                    
                    
                    <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">CITY</label>
                        {{ Form::select(
                        'emp_city',
                        array('' => 'Select City','Maharagama' => 'Maharagama','Kottawa' => 'Kottawa', 'Homagama' => 'Homagama', 'Dehiwala' => 'Dehiwala', 'Nugegoda' => 'Nugegoda', 'Matara' => 'Matara'),
                        $employee->emp_city,
                        array('class' => 'form-control','required' => 'required')
                        ) 
                        }}
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">DISTRICT</label>
                        {{ Form::select(
                        'emp_district',
                        array('' => 'Select District','Colombo' => 'Colombo','Gampaha' => 'Gampaha', 'Matara' => 'Matara', 'Anuradhapura' => 'Anuradhapura', 'Polonnaruwa' => 'Polonnaruwa', 'Hambanthota' => 'Hambanthota'),
                        $employee->emp_district,
                        array('class' => 'form-control','required' => 'required')
                        ) 
                        }}
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">PROVINCE</label>
                        {{ Form::select(
                        'emp_province',
                        array('' => 'Select Province','Western Province' => 'Western Province','Sourthen Province' => 'Sourthen Province', 'Northen Province' => 'Northen Province'),
                        $employee->emp_province,
                        array('class' => 'form-control','required' => 'required')
                        ) 
                        }}
                    </div>   
                    </div>
                    
                    <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">COUNTRY</label>
                        {{ Form::select(
                        'emp_country',
                        array('' => 'Select Country','Sri Lanka' => 'Sri Lanka','Australia' => 'Australia', 'France' => 'France', 'United Kingdom' => 'United Kingdom', 'United States of Americe' => 'United States of Americe', 'Italy' => 'Italy'),
                        $employee->emp_country,
                        array('class' => 'form-control','required' => 'required')
                        ) 
                        }}
                    </div>   
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <input type="hidden" class="form-control" name="id" value="{{$employee->id}}">
                    </div>
      			</div>
    		</div>
  		</div>
	</div>
	
	<div class="row">            
  		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel">
            <div class="x_content text-right">
            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div> 
            </div>
            </div>
        </div>
    </div>
    </form>
    
	
	<form action="{{ URL::to('update-employee') }}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
	
    {{ csrf_field() }} 
	
	<div class="row">            
  		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel">
      			<div class="x_title">
        			<div class="clearfix" align="left"><b>EMPLOYEE SECONDARY DATA</b></div>
     			</div>
     			<div class="x_content">
        			<div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">NIC NUMBER</label>
                        <input type="text" class="form-control" name="emp_nic" required value="{{$employee->emp_nic}}">
                    </div>                    
          			<div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">AGE</label>
                        <input type="text" class="form-control" name="emp_age" required value="{{$employee->emp_age}}">
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">GENDER</label>
                        {{ Form::select(
                        'emp_gender',
                        array('' => 'Select Gender','M' => 'Male','F' => 'Female'),
                        $employee->emp_gender,
                        array('class' => 'form-control','required' => 'required')
                        ) 
                        }}
                    </div>
        			</div>
                    
                    <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">DOB DAY</label>
                        <input type="text" class="form-control" name="emp_dobday" maxlength="2" value="{{$employee->emp_dobday}}">
                    </div>
            
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">DOB MONTH</label>
                        {{ Form::selectMonth('emp_dobmonth', $employee->emp_dobmonth, array('class' => 'form-control')) }}                     
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">DOB YEAR</label>
                        <input type="text" class="form-control" name="emp_dobyear" maxlength="4" value="{{$employee->emp_dobyear}}">
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">EMAIL</label>
                        <input type="email" class="form-control" name="emp_email" value="{{$employee->emp_email}}">
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">CONTACT: HOME</label>
                        <input type="text" class="form-control" name="emp_telhome" value="{{$employee->emp_telhome}}">
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">CONTACT: MOBILE</label>
                        <input type="text" class="form-control" name="emp_telmobile" value="{{$employee->emp_telmobile}}">
                    </div>   
                    </div>
                    
                    <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">RELATIONSHIP STATUS</label>
                        {{ Form::select(
                        'emp_relationshipstatus',
                        array('' => 'Select Relationship Status','Single' => 'Single','Married' => 'Married'),
                        $employee->emp_relationshipstatus,
                        array('class' => 'form-control')
                        ) 
                        }}
                    </div>   
                    </div>
      			</div>
    		</div>
  		</div>
	</div>

    <div class="row">            
  		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel">
      			<div class="x_title">
        			<div class="clearfix" align="left"><b>EMPLOYEE WORK DATA</b></div>
     			</div>
     			<div class="x_content">
        			<div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">EMPLOYEE INDEX</label>
                        <input type="text" class="form-control" name="emp_index" value="{{$employee->emp_index}}" required>
                    </div>                    
          			<div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">DEPARTMENT</label>
                        {{ Form::select(
                        'emp_departmentid',
                        array('' => 'Select Department','1' => 'ADMINISTRATION','2' => 'EDUCATION'),
                        $employee->emp_departmentid,
                        array('class' => 'form-control','required' => 'required')
                        ) 
                        }}
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">DESIGNATION</label>
                        {{ Form::select(
                        'emp_designationid',
                        array('' => 'Select Designation','1' => 'LECTURER','2' => 'PROGRAM ADMINSTRATOR'),
                        $employee->emp_designationid,
                        array('class' => 'form-control','required' => 'required')
                        ) 
                        }}
                    </div>
        			</div>
                    
                    <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">JOINED DATE</label>
                        <input type="date" class="form-control" name="emp_joined" value="{{$employee->emp_joined}}">
                    </div>   
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">LEFT DATE</label>
                        <input type="date" class="form-control" name="emp_left" value="{{$employee->emp_left}}">
                    </div>                         
                    </div>
                    
                

                    <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">OTHER OCUPATIONS</label>
                        <textarea class="form-control" name="emp_otheroccupations" rows="4">{{$employee->emp_otheroccupations}}</textarea>
                    </div>                       
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <input type="hidden" class="form-control" name="id" value="{{$employee->id}}">
                    </div>

      			</div>
    		</div>
  		</div>
	</div>
	
	<div class="row">            
  		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel">
            <div class="x_content text-right">
            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div> 
            </div>
            </div>
        </div>
    </div>
    </form>


@stop