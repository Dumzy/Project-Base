<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'tbl_master_cities';
    protected $primaryKey = 'city_id';
}