<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffApplication extends Model
{
     protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'position',
        'message',
        'cv',
    ];
}
