<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    protected $table = 'tbl_master_streams';
    protected $primaryKey = 'stream_id';
}