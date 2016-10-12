@extends('system.layouts.baselayout')

@section('content')
	<div class="page-title">
    	<div class="title_left">
   			  <h3>EDIT CITY</h3>
 		  </div>
      <div align="right">
          <a href="{{ URL::to('view-city') }}" class="btn btn-primary btn-sm">CITIES</a>
          <a href="{{ URL::to('delete-city/'.$city->city_id) }}" class="btn btn-primary btn-sm btn-red">DELETE</a>
      </div>
	</div>
          
	<form action="{{ URL::to('update-city') }}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
    <div class="row">            
  		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel">
      			<!-- <div class="x_title">
        			<div class="clearfix" align="left"><b>EMPLOYEE PRIMARY DATA</b></div>
     			</div> -->
     			<div class="x_content">
        			<div class="row">
                    
          			<div class="col-md-8 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">CITY NAME</label>
                        <input type="text" class="form-control" name="cityname" value="{{$city->cityname}}" required>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <input type="hidden" class="form-control" name="city_id" value="{{$city->city_id}}">
                     </div>
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
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div> 
            </div>
            </div>
        </div>
    </div>
        


</form>


@stop