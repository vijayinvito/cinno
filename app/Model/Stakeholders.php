<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Stakeholders extends Model
{
    protected $table = "stakeholders";
    protected $fillable = ['plan_id','name','desceiption','phone','email'];
}
