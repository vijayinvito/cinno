<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Agencies extends Model
{
    protected $table = "agencies";
    protected $fillable = [
        'plan_id',
        'name',
        'address',
        'address_2',
        'city',
        'state',
        'zip',
        'phone',
        'email',
    ];
}
