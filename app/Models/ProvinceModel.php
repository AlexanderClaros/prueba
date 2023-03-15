<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvinceModel extends Model
{
    protected $table = 'province';
    protected $fillable=['name','id','community_id'];
    use HasFactory;
}
