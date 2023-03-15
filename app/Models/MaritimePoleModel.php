<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritimePoleModel extends Model
{
    protected $table = 'maritime_poles';
    protected $fillable=[
        'id',
        'locality',
        'port',
        'address',
        'postal_code',
        'rotulo',
        'working_hours',
        'lat',
        'long',
        'diesel_oil_a',
        'diesel_oil_b',
        'maritime_diesel',
        'gas_95_e10',
        'gas_95_e5',
        'municipality_id'
    ];
    use HasFactory;
}
