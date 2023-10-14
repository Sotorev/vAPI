<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function get()
    {
        try {
            $data = Vehicle::get();
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        $vehicle = new Vehicle();
        $vehicle->plate_number = $request->plate_number;
        $vehicle->vin = $request->vin;
        $vehicle->owner_name = $request->owner_name;
        $vehicle->plate_type_id = $request->plate_type_id;
        $vehicle->chasis_number = $request->chasis_number;
        $vehicle->save();
    }

    public function update(Request $request)
    {
        $vehicle = Vehicle::findOrFail($request->id);
        $vehicle->plate_number = $request->plate_number;
        $vehicle->vin = $request->vin;
        $vehicle->owner_name = $request->owner_name;
        $vehicle->plate_type_id = $request->plate_type_id;
        $vehicle->chasis_number = $request->chasis_number;
        $vehicle->save();
    }

    public function delete(Request $request)
    {
        $vehicle = Vehicle::findOrFail($request->id);
        $vehicle->delete();
    }

    public function show(Request $request)
    {
        $vehicle = Vehicle::findOrFail($request->id);
        if ($vehicle) {
            return ['vehicle' => $vehicle];
        }
        return ['No se encontraron datos'];
    }
}
