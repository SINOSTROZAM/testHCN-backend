<?php

namespace App\Http\Controllers;

use App\Models\Street;
use App\Models\City;
use Illuminate\Http\Request;

class StreetController extends Controller
{
    public function index($cityId)
    {
        return Street::where('city_id', $cityId)->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'city_id' => 'required|exists:cities,id',
        ]);

        $street = Street::create($request->all());

        return response()->json($street, 201);
    }

    public function update(Request $request, $id)
    {
        $street = Street::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'city_id' => 'required|exists:cities,id',
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

