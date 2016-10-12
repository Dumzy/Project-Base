<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'tbl_master_countries';
    protected $primaryKey = 'country_id';
}