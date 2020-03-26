<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Critical extends Model
{
    protected $table = "critical";
    protected $fillable = ['plan_id','name','priority'];
}
