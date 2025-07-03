<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
        protected $fillable = [
        'company_name',
        'commercial_registration_no',
        'activity_type',
        'full_address',
        'responsible_person',
        'job_title',
        'nationality',
        'email',
        'phone_number',
        'requested_area',
        'setup_preference',
    ];
}
