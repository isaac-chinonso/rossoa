<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch_Category extends Model
{
    use HasFactory;

    public function VoteCandidate()
    {
    	return $this->hasMany('App\Models\Batch_Candidate', 'category_id');
    }

    public function VoteDate()
    {
    	return $this->hasMany('App\Models\Batch_votedate', 'category_id');
    }

    public function Vote()
    {
    	return $this->hasMany('App\Models\Batch_Vote', 'category_id');
    }
}
