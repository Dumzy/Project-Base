@extends('system.layouts.baselayout')

@section('content')

    <div class="page-title">
  		<div class="title_left">
         	<h3>VIEW EMPLOYEE</h3>
    	</div>
        <div align="right">
        <a href="{{ URL::to('create-employee') }}" class="btn btn-primary btn-sm">ADD EMPLOEE</a>
        </div>
    </div>
          
	<div class="row">            
   		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel" style="height:470px;">
            	<div class="x_title">
                 	<div class="clearfix" align="left"><b>EMPLOYEE DETAILS</b></div>
          		</div>
                
                <div class="x_content">
                  	<table id="datatable-buttons" class="table table-striped table-bordered">
                 		<thead>
                      		<tr>
                        		<th>Employee ID</th>
                        		<th>Name</th>
                                <th>Department</th>
                                <th>Designation</th>
                                <th>Contact Number</th>
                                <th>Action</th>
                 			</tr>
                    	</thead>
                    	<tbody>
                            @foreach($employees as $employee)
                      		<tr>
                        		<td>{{$employee->emp_index}}</td>
                        		<td>{{$employee->emp_fullname}}</td>
                                <td>{{$employee->emp_departmentid}}</td>
                                <td>{{$employee->emp_designationid}}</td>
                                <td>{{$employee->emp_telmobile}}</td>
                                <td class="text-center"><a href="{{ URL::to('edit-employee/'.$employee->id) }}" class="btn btn-primary btn-sm">View</a></td>
                      		</tr>
                      		@endforeach
                      </tbody>
          			</table>
         		</div>
        	</div>
     	</div>
  	</div>
@stop