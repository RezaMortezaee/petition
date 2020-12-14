<?php

namespace App\Models;

use App\Models\Topic;
use App\Models\Petition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function petitions()
    {
        return $this->belongsToMany(Petition::class);
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }
}
