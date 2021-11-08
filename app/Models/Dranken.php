<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dranken extends Model
{
    protected $table = "dranken";
    use HasFactory;

    public function stakeholders()
    {
        return $this->belongsTo(Stakeholders::class);
    }
}
