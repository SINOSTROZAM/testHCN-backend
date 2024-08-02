<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    //relación con calles
    public function streets()
    {
        return $this->hasMany(Street::class);
    }
    //relación inversa con provincias
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
