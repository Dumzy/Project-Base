<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'tbl_master_provinces';
    protected $primaryKey = 'province_id';
}