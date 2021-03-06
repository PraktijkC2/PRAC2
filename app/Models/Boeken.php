<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boeken extends Model
{
    public $table = "boeken";
    use HasFactory;

    public function library()
    {
        return $this->belongsTo(Library::class);
    }
}
