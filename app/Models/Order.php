<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'order_id',
        'user_id',
        'water_package_id',
        'user_name',
        'user_phone',
        'package_name',
        'address',
        'status',
        'total_price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function waterPackage()
    {
        return $this->belongsTo(WaterPackages::class);
    }
}
