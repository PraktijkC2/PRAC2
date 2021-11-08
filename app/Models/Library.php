<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    public function actors()
    {
        return $this->hasMany(Actors::class);
    }

    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    public function films()
    {
        return $this->hasMany(Films::class);
    }

    public function boeken()
    {
        return $this->hasMany(Boeken::class);
    }
}
