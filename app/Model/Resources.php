<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    protected $table = "resources";
    protected $fillable = ['plan_id','name','quantity'];
}
