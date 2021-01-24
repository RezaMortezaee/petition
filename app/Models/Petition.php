<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Sign;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Petition extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'body'
    ];
    /* Relations */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function sign()
    {
        return $this->hasOne(Sign::class);
    }
}
