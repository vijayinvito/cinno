<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Authority extends Model
{
    protected $table = "authority";
    protected $fillable = ['plan_id','name','title'];
}
