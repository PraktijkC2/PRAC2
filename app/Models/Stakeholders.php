<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stakeholders extends Model
{
    use HasFactory;

    public function dranken()
    {
        return $this->hasMany(Dranken::class);
    }

    public function gereedschap()
    {
        return $this->hasMany(Gereedschap::class);
    }
}
