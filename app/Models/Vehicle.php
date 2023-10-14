<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = ['plate_number', 'plate_type_id', 'vin', 'owner_name', 'chasis_number'];

    public function plateType()
    {
        return $this->belongsTo(PlateType::class);
    }
}
