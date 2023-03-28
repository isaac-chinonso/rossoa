<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    public function forummember()
    {
        return $this->hasMany('App\Models\ForumMember', 'group_id');
    }
}
