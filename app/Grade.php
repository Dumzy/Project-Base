<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'tbl_master_grades';
    protected $primaryKey = 'grades_id';
}