<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','image','slug','brand', 'location', 'price', 'condition', 'feature', 'description','created_at','updated_at'];

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
