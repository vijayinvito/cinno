<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Keystaf extends Model
{
    protected $table = "key_staff";
    protected $fillable = ['plan_id','name','department','phone','email','remote'];
}
