<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'tbl_master_schools';
    protected $primaryKey = 'school_id';
}