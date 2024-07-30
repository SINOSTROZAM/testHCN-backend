<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index($provinceId)
    {
        return City::where('province_id', $provinceId)->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'province_id' => 'required|exists:provinces,id',
        ]);

        $city = City::create($request->all());

        return response()->json($city, 201);
    }

    public function update(Request $request, $id)
    {
        $city = City::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'province_id' => 'required|exists:provinces,id',
        ]);

        $city->update($request->all());

        return response()->json($city, 200);
    }

    public function destroy($id)
    {
        City::destroy($id);

        return response()->json(null, 204);
    }
}

