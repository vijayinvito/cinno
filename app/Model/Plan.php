<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    protected $table = "plans";
    protected $fillable = ['plan_name','user_id'];
    
}
