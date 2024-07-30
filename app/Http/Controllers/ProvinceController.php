<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Region;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index($regionId)
    {
        return Province::where('region_id', $regionId)->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'region_id' => 'required|exists:regions,id',
        ]);

        $province = Province::create($request->all());

        return response()->json($province, 201);
    }

    public function update(Request $request, $id)
    {
        $province = Province::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'region_id' => 'required|exists:regions,id',
        ]);

        $province->update($request->all());

        return response()->json($province, 200);
    }

    public function destroy($id)
    {
        Province::destroy($id);

        return response()->json(null, 204);
    }
}

