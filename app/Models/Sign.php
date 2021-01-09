<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sign extends Model
{

    use HasFactory;

    /* Relations */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }

    public function petition()
    {
        return $this->belongsTo(Petition::class);
    }
}
