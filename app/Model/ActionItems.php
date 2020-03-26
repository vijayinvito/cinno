<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Actionitems extends Model
{
    protected $table = "action_items";
    protected $fillable = [
        'plan_id',
        'name',
        'assigned_to',
    ];
}
