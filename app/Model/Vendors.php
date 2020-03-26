<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{
    protected $table = "vendors";
    protected $fillable = [
        'plan_id',
        'name',
        'service',
        'address',
        'address_2',
        'city',
        'status',
        'zip',
        'supplier_representative',
        'phone',
        'email',
        'vendor_phone',
        'Vendor_email',
    ];
}
