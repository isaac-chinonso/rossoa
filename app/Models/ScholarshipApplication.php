<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipApplication extends Model
{
    use HasFactory;

    public function scholarship()
    {
    	return $this->belongsTo('App\Models\Scholarship');
    }
}
