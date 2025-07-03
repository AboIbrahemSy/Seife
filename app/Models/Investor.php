<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
        protected $fillable = [
        'company_name',
        'responsible_person',
        'job_title',
        'email',
        'phone_number',
        'nationality',
        'full_address',
        'commercial_registration_no',
        'activity_type',
        'requested_area',
        'setup_preference',
    ];
}
