<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
//    protected $dateFormat = 'Y-m-d H:i:s';
    protected $dates = ['created_at', 'updated_at'];

}
