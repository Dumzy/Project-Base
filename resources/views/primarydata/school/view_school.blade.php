@extends('system.layouts.baselayout')

@section('content')

    <div class="page-title">
  		<div class="title_left">
         	<h3>VIEW SCHOOLS</h3>
    	</div>
        <div align="right">
        <a href="{{ URL::to('create-school') }}" class="btn btn-primary btn-sm">ADD SCHOOL</a>
        </div>
    </div>
          
	<div class="row">            
   		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel" style="height:470px;">
            	<div class="x_title">
                 	<div class="clearfix" align="left"><b>SCHOOL NAMES</b></div>
          		</div>
                
                <div class="x_content">
                  	<table id="datatable-buttons" class="table table-striped table-bordered">
                 		<thead>
                      		<tr>
                        		<th>School ID</th>
                        		<th>Name</th>
                            
                            <th>Action</th>
                 			    </tr>
                  	</thead>
                    	<tbody>
                            @foreach($schools as $school)
                        		<tr>
                          		<td>{{$school->school_id}}</td>
                          		<td>{{$school->schoolname}}</td>
                              
                              <td class="text-center"><a href="{{ URL::to('edit-school/'.$school->school_id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                        		</tr>
                      		@endforeach
                      </tbody>
          			</table>
         		</div>
        	</div>
     	</div>
  	</div>
@stop