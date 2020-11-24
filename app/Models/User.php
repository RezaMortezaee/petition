<?php

namespace App\Models;

use App\Models\Sign;
use App\Models\Comment;
use App\Models\Petition;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function comments()
    {
        return $this->hasMany(Comment::class, 'comment_id');
    }

    public function signs()
    {
        return $this->hasMany(Sign::class, 'sign_id');
    }

    public function petitions()
    {
        return $this->hasMany(Petition::class, 'petition_id');
    }
}
