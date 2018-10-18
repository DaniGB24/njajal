<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSwasta extends Model
{
    protected $table = 'data_swasta';
    protected $primaryKey = 'id';
    public $timestamps =false;
}
