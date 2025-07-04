<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Staff extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name',
        'job_title',
        'email',
        'phone',
        'image',
    ];

    public $translatable = ['name', 'job_title'];
}
