<?php 
	require_once '../public/library/functions_student.php';
?>
@extends('system.layouts.baselayout')

@section('content')
	<div class="page-title">
    	<div class="title_left">
   			<h3>ADD STUDENT</h3>
 		</div>
	</div>
          
	<form id="addStudent" data-parsley-validate class="form-horizontal form-label-left">
	<div class="row">            
  		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel">
      			<div class="x_title">
        			<div class="clearfix" align="left"><b>STUDENT PRIMARY DATA</b></div>
     			</div>
     			<div class="x_content">
        			<div class="col-md-4 col-sm-12 col-xs-12 form-group">
            			<label class="control-label">INDEX NUMBER</label>
             			<input type="text" class="form-control" id="tb_index_number" name="tb_index_number">
          			</div>

                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">YEAR</label>
                        <select class="form-control" id="year" name="year">
                            <option value=''>SELECT YEAR</option>
                        </select>
                    </div>
            
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">NIC</label>
                        <input type="text" class="form-control" id="tb_nic" name="tb_nic">
                    </div>
            
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">DOB YEAR</label>
                        <select class="form-control" id="sb_year" name="sb_year">
                            <option value=''>SELECT YEAR</option>
                        </select>
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">DOB MONTH</label>
                        <select class="form-control" id="sb_month" name="sb_month">
                            <option value=''>SELECT MONTH</option>
                            <option value='1'>JANAURY</option>
                            <option value='2'>FEBRUARY</option>
                            <option value='3'>MARCH</option>
                            <option value='4'>APRIL</option>
                            <option value='5'>MAY</option>
                            <option value='6'>JUNE</option>
                            <option value='7'>JULY</option>
                            <option value='8'>AUGUST</option>
                            <option value='9'>SEPTEMBER</option>
                            <option value='10'>OCTOBER</option>
                            <option value='11'>NOVEMBER</option>
                            <option value='12'>DECEMBER</option>
                        </select> 
                    </div>
            
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">DOB DAY</label>
                        <select class="form-control" id="sb_day" name="sb_day">
                            <option value=''>SELECT DAYS</option>
                            <?php for($i=1;$i<=31;$i++){ ?>
                                <option value='<?php echo $i; ?>'><?php echo $i; ?></option>
                            <?php }?>
                        </select>
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">GENDER</label>
                        <select class="form-control" id="sb_gender" name="sb_gender">
                            <option value=''>SELECT GENDER</option>
                            <option value='male'>MALE</option>
                            <option value='female'>FEMALE</option>
                        </select>
                    </div>
            
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">CONTACT : HOME</label>
                        <input type="text" class="form-control" id="tb_hm_no" name="tb_hm_no">
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">CONTACT : MOBILE</label>
                        <input type="text" class="form-control" id="tb_mobile" name="tb_mobile">
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">MEDIUM</label>
                        <select class="form-control" id="sb_medium" name="sb_medium">
                            <option value='0'>SELECT MEDIUM</option>
                            <?php echo getMedium("") ?>
                        </select>
                    </div>
            
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">EMAIL</label>
                        <input type="email" class="form-control" id="tb_email" name="tb_email">
                    </div> 
      			</div>
    		</div>
  		</div>
	</div>
    
    
    <div class="row">            
  		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="x_panel">
      			<div class="x_title">
        			<div class="clearfix" align="left"><b>STUDENT SECONDARY DATA</b></div>
     			</div>
     			<div class="x_content">
        			<div class="col-md-4 col-sm-12 col-xs-12 form-group">
            			<label class="control-label">NAME WITH INITIALS</label>
             			<input type="text" class="form-control" id="tb_name_initials" name="tb_name_initials">
          			</div>

                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">FIRST NAME</label>
                        <input type="text" class="form-control" id="tb_first_name" name="tb_first_name">
                    </div>
            
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">MIDDLE NAME</label>
                        <input type="text" class="form-control" id="tb_middle_name" name="tb_middle_name">
                    </div>
            
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">LAST NAME</label>
                        <input type="text" class="form-control" id="tb_last_name" name="tb_last_name">
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">ADDRESS : LINE 1</label>
                        <input type="text" class="form-control" id="tb_address_l1" name="tb_address_l1">
                    </div>
            
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">ADDRESS : LINE 2</label>
                        <input type="text" class="form-control" id="tb_address_l2" name="tb_address_l2">
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label class="control-label">ADDRESS : LINE 3</label>
                        <input type="text" class="form-control" id="tb_address_l3" name="tb_address_l3">
                    </div>
                    
                    <div class="form-group">
                        <!--<div class="ln_solid"></div>-->
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div> 
      			</div>
    		</div>
  		</div>
	</div>
</form>

<script type="text/javascript">
    $(document).ready(function() {
      	$('#birthday').daterangepicker({singleDatePicker: true,calender_style: "picker_4"}, function(start, end, label) {console.log(start.toISOString(), end.toISOString(), label);});
	  	
		for (i = new Date().getFullYear(); i > 1990; i--)
		{
			$('#sb_year').append($('<option />').val(i).html(i));
		}
		
		for (i = new Date().getFullYear(); i > 2010; i--)
		{
			$('#year').append($('<option />').val(i).html(i));
		}
    });

</script>

@stop