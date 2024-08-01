<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $fillable = ['name', 'region_id', 'province_id', 'city_id'];

    // Relación muchos a uno con Región
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    // Relación muchos a uno con Provincia
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    // Relación muchos a uno con Ciudad
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
