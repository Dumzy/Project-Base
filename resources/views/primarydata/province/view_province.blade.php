@extends('system.layouts.baselayout')

@section('content')

    <div class="page-title">
  		<div class="title_left">
         	<h3>VIEW PROVINCE</h3>
    	</div>
        <div align="right">
        <a href="{{ URL::to('create-province') }}" class="btn btn-primary btn-sm">ADD PROVINCE</a>
        </div>
    </div>
          
	<div class="row">            
   		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel" style="height:470px;">
            	<div class="x_title">
                 	<div class="clearfix" align="left"><b>PROVINCE</b></div>
          		</div>
                
                <div class="x_content">
                  	<table id="datatable-buttons" class="table table-striped table-bordered">
                 		<thead>
                      		<tr>
                        		<th>Province ID</th>
                        		<th>Name</th>
                            
                            <th>Action</th>
                 			    </tr>
                  	</thead>
                    	<tbody>
                            @foreach($provinces as $province)
                        		<tr>
                          		<td>{{$province->province_id}}</td>
                          		<td>{{$province->proname}}</td>
                              
                              <td class="text-center"><a href="{{ URL::to('edit-province/'.$province->province_id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                        		</tr>
                      		@endforeach
                      </tbody>
          			</table>
         		</div>
        	</div>
     	</div>
  	</div>
@stop