<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    public function Candidate()
    {
    	return $this->belongsTo('App\Models\VoteCandidate');
    }

    public function Category()
    {
        return $this->belongsTo('App\Models\VoteCategory');
    }
    
}
