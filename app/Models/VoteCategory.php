<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteCategory extends Model
{
    use HasFactory;
    public function VoteCandidate()
    {
    	return $this->hasMany('App\Models\VoteCandidate', 'category_id');
    }

    public function Votedate()
    {
    	return $this->hasMany('App\Models\Votedate', 'category_id');
    }


    public function Vote()
    {
    	return $this->hasMany('App\Models\Vote', 'category_id');
    }
}
