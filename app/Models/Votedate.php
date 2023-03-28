<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votedate extends Model
{
    use HasFactory;
    public function Category()
    {
        return $this->belongsTo('App\Models\VoteCategory');
    }
}
