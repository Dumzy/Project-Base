@extends('system.layouts.baselayout')

@section('content')
	<div class="page-title">
    	<div class="title_left">
   			  <h3>EDIT PROVINCE</h3>
 		  </div>
      <div align="right">
          <a href="{{ URL::to('view-province') }}" class="btn btn-primary btn-sm">PROVINCE</a>
          <a href="{{ URL::to('delete-province/'.$province->province_id) }}" class="btn btn-primary btn-sm btn-red">DELETE</a>
      </div>
	</div>
          
	<form action="{{ URL::to('update-province') }}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
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
                        <label class="control-label">PROVINCE NAME</label>
                        <input type="text" class="form-control" name="proname" value="{{$province->proname}}" required>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <input type="hidden" class="form-control" name="province_id" value="{{$province->province_id}}">
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