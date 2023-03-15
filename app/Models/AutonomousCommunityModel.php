<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutonomousCommunityModel extends Model
{
    protected $table = 'autonomous_community';
    protected $fillable=['name','id'];
    use HasFactory;
}
