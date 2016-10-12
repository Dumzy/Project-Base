@extends('system.layouts.baselayout')

@section('content')

    <div class="page-title">
  		<div class="title_left">
         	<h3>VIEW COUNTRIES</h3>
    	</div>
        <div align="right">
        <a href="{{ URL::to('create-country') }}" class="btn btn-primary btn-sm">ADD COUNTRY</a>
        </div>
    </div>
          
	<div class="row">            
   		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel" style="height:470px;">
            	<div class="x_title">
                 	<div class="clearfix" align="left"><b>COUNTRIES</b></div>
          		</div>
                
                <div class="x_content">
                  	<table id="datatable-buttons" class="table table-striped table-bordered">
                 		<thead>
                      		<tr>
                        		<th>Country ID</th>
                        		<th>Name</th>
                            
                            <th>Action</th>
                 			    </tr>
                  	</thead>
                    	<tbody>
                            @foreach($countries as $country)
                        		<tr>
                          		<td>{{$country->country_id}}</td>
                          		<td>{{$country->ctryname}}</td>
                              
                              <td class="text-center"><a href="{{ URL::to('edit-country/'.$country->country_id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                        		</tr>
                      		@endforeach
                      </tbody>
          			</table>
         		</div>
        	</div>
     	</div>
  	</div>
@stop