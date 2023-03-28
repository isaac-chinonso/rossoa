<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch_vote extends Model
{
    use HasFactory;
    public function Candidate()
    {
    	return $this->belongsTo('App\Models\Batch_Candidate');
    }

    public function Category()
    {
        return $this->belongsTo('App\Models\Batch_Category');
    }
}
