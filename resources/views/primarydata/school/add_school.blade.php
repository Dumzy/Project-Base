@extends('system.layouts.baselayout')

@section('content')
	<div class="page-title">
    	<div class="title_left">
   			  <h3>ADD SCHOOL</h3>
 		  </div>
      <div align="right">
          <a href="{{ URL::to('view-city') }}" class="btn btn-primary btn-sm">SCHOOLS</a>
      </div>
	</div>
          
	<form action="{{ URL::to('save-school') }}" id="addSchool" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
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
                        <label class="control-label">SCHOOL NAME</label>
                        <input type="text" class="form-control" name="schoolname" required>
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