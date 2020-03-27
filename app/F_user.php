<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class F_user extends Model
{
    protected $table = 'frontend_users';
    protected $fillable = ['is_active'];
}
