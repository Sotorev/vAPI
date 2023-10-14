<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlateType;

class PlateController extends Controller
{
        public function get()
        {
            try {
                $data = PlateType::get();
                return response()->json($data, 200);
            } catch (\Throwable $th) {
                return response()->json(['error' => $th->getMessage()], 500);
            }
        }

        public function store(Request $request)
        {
            $plateType = new PlateType();
            $plateType->plate_type = $request->plate_type;
            $plateType->save();
        }

        public function update(Request $request)
        {
            $plateType = PlateType::findOrFail($request->id);
            $plateType->plate_type = $request->plate_type;
            $plateType->save();
        }

        public function delete(Request $request)
        {
            $plateType = PlateType::findOrFail($request->id);
            $plateType->delete();
        }

        public function show(Request $request)
        {
            $plateType = PlateType::findOrFail($request->id);
            if ($plateType) {
                return ['plate_type' => $plateType];
            }
            return ['No se encontraron datos'];
        }
}
