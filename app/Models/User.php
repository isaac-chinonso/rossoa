<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasMany('App\Models\Profile');
    }

    public function votecandidate()
    {
        return $this->hasMany('App\Models\VoteCandidate');
    }

    public function job()
    {
        return $this->hasMany('App\Models\Job');
    }

    public function scholarship()
    {
        return $this->hasMany('App\Models\Scholarship');
    }

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }

    public function member()
    {
        return $this->hasMany('App\Models\ForumMember');
    }

    public function message()
    {
        return $this->hasMany('App\Models\Message');
    }
}
