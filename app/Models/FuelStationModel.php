<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelStationModel extends Model
{
    protected $table = 'fuel_station';
    protected $fillable=[
        'id',
        'locality',
        'address',
        'postal_code',
        'rotulo',
        'working_hours',
        'lat',
        'long',
        'biodiesel',
        'bioetanol',
        'liquefied_natural_gas',
        'compressed_natural_gas',
        'liquefied_petroleum_gases',
        'diesel_oil_a',
        'diesel_oil_b',
        'diesel_oil_premium',
        'gas_95_e10',
        'gas_95_e5',
        'gas_95_e5_premium',
        'gas_98_e10',
        'gas_98_e5',
        'hydrogen',
        'municipality_id'
    ];
    use HasFactory;
}
