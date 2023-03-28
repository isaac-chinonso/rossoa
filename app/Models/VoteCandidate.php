<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteCandidate extends Model
{
    use HasFactory;

    public function Category()
    {
        return $this->belongsTo('App\Models\VoteCategory');
    }

    public function Vote()
    {
        return $this->hasMany('App\Models\Vote');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
