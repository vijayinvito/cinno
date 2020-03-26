<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pandemic extends Model
{
    protected $table = "pandemic";
    protected $fillable = ['plan_id','name','role','responsbility'];
}
