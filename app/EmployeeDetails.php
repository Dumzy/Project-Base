<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeDetails extends Model
{
    protected $table = 'tbl_details_employees';
    
    public $timestamps = false;
}
