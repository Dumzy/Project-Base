@extends('system.layouts.baselayout')

@section('content')

    <div class="page-title">
  		<div class="title_left">
         	<h3>VIEW GRADES</h3>
    	</div>
        <div align="right">
        <a href="{{ URL::to('create-grade') }}" class="btn btn-primary btn-sm">ADD GRADE</a>
        </div>
    </div>
          
	<div class="row">            
   		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel" style="height:470px;">
            	<div class="x_title">
                 	<div class="clearfix" align="left"><b>GRADES</b></div>
          		</div>
                
                <div class="x_content">
                  	<table id="datatable-buttons" class="table table-striped table-bordered">
                 		<thead>
                      		<tr>
                        		<th>Grade ID</th>
                        		<th>Name</th>
                            
                            <th>Action</th>
                 			    </tr>
                  	</thead>
                    	<tbody>
                            @foreach($grades as $grade)
                        		<tr>
                          		<td>{{$grade->grades_id}}</td>
                          		<td>{{$grade->grade}}</td>
                              
                              <td class="text-center"><a href="{{ URL::to('edit-grade/'.$grade->grades_id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                        		</tr>
                      		@endforeach
                      </tbody>
          			</table>
         		</div>
        	</div>
     	</div>
  	</div>
@stop