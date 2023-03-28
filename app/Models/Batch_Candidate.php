<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch_Candidate extends Model
{
    use HasFactory;
    public function Category()
    {
        return $this->belongsTo('App\Models\Batch_Category');
    }

    public function Vote()
    {
        return $this->hasMany('App\Models\Batch_Vote');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
