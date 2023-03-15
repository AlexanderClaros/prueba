<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MunicipalityModel extends Model
{
    protected $table = 'municipality';
    protected $fillable=['name','id','province_id'];
    use HasFactory;
}
