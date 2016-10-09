<?php 
function getMedium($id){
	$results = DB::select( DB::raw("SELECT mdm_id,mdmname FROM tbl_master_mediums WHERE deleted = 0"));
	
	foreach($results as $r){
		if($r->mdm_id == $id){
			$select = "selected";
		}
		else{
			$select = "";
		}
		
		echo '<option value="'.$r->mdm_id.'" '.$select.'>'.$r->mdmname.'</option>'; 
	}
}?>
