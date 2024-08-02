<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    //relación con ciudades
    public function cities()
    {
        return $this->hasMany(City::class);
    }
    //relación inversa con regiones
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
