<?php

namespace App\Http\Controllers;

use App\Models\Street;
use App\Models\City;
use Illuminate\Http\Request;

class StreetController extends Controller
{
    public function indexAll()
    {
        // Recuperar todas las calles junto con las relaciones
        $streets = Street::with(['city.province.region'])->get();

        // Transformar los datos para incluir los nombres en lugar de los IDs
        $transformedStreets = $streets->map(function ($street) {
            return [
                'name' => $street->name,
                'street_id' => $street->id,
                'region' => $street->city->province->region->name,
                'region_id' => $street->region_id,
                'province' => $street->city->province->name,
                'province_id' => $street->province_id,
                'city' => $street->city->name,
                'city_id' => $street->city_id,
                
            ];
        });

        // Devolver la respuesta JSON con los datos transformados
        return response()->json($transformedStreets, 200);
    }

    public function index($cityId)
    {
        return Street::where('city_id', $cityId)->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'city_id' => 'required|exists:cities,id',
            'province_id' => 'required|exists:provinces,id',
            'region_id' => 'required|exists:regions,id',
        ]);

        $street = Street::create($request->all());

        return response()->json($street, 201);
    }

    public function update(Request $request, $id)
    {
        $street = Street::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $street->update($request->all());

        return response()->json($street, 200);
    }

    public function destroy($id)
    {
        Street::destroy($id);

        return response()->json(null, 204);
    }
}

