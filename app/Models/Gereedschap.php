<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gereedschap extends Model
{
    use HasFactory;
    
    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function stakeholders()
    {
        return $this->belongsTo(Stakeholders::class);
    }
}
