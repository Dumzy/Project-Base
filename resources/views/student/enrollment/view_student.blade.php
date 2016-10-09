@extends('system.layouts.baselayout')

@section('content')

    <div class="page-title">
  		<div class="title_left">
         	<h3>VIEW STUDENT</h3>
    	</div>
        <div align="right"><button type="button" class="btn btn-primary btn-sm" onClick="viewAddNewStudent();">ADD STUDENT</button></div>
    </div>
          
	<div class="row">            
   		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel" style="height:470px;">
            	<div class="x_title">
                 	<div class="clearfix" align="left"><b>STUDENT DETAILS</b></div>
          		</div>
                
                <div class="x_content">
                  	<table id="datatable-buttons" class="table table-striped table-bordered">
                 		<thead>
                      		<tr>
                        		<th>Name</th>
                        		<th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                 			</tr>
                    	</thead>
                    	<tbody>
                      		<tr>
                        		<td>Tiger Nixon</td>
                        		<td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                      		</tr>
                      		<tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                       		</tr>
                      </tbody>
          			</table>
         		</div>
        	</div>
     	</div>
  	</div>
    
<script>
  function viewAddNewStudent(){
    //$.prompt("Hello World!");
    window.location="{{URL::to('create-student')}}";
  }
</script>
@stop