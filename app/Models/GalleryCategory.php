<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;

    public function gallery()
    {
    	return $this->hasMany('App\Models\Gallery', 'category_id');
    }
}
