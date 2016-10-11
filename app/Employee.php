<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Employee extends Model
{
    protected $table = 'tbl_master_employees';
    
    
    public static function joinall(){
        
        return DB::table('tbl_master_employees')->join('tbl_details_employees', 'tbl_master_employees.id', '=', 'tbl_details_employees.emp_id')->where('tbl_master_employees.deleted' , '=', 0)->select('*')->get();
        
    }
    
    public static function joinwhere($id){
        
        return DB::table('tbl_master_employees')->join('tbl_details_employees', 'tbl_master_employees.id', '=', 'tbl_details_employees.emp_id')->where('tbl_master_employees.id' , '=', $id)->select('*')->first();
        
    }
    
}
