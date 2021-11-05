<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gereedschap extends Model
{
    public $table = "gereedschap";
    use HasFactory;

    public function stakeholders()
    {
        return $this->belongsTo(Stakeholders::class);
    }
}
