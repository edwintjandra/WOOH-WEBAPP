<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterMachines extends Model
{
    use HasFactory;

    protected $fillable=[
        'location_detail',
        'picture_url',
        'location_url'
    ];
}
