<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'phone_number', 'email',
        'company', 'job_title', 'country', 'address', 'company_info',
    ];

}
