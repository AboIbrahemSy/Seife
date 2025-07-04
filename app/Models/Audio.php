<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
        protected $fillable = ['title','image','description','language_id','file_name'];
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
