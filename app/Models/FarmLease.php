<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farmLease extends Model
{
protected $fillable=[
     'farm_id',
        'date_from',
        'date_to',
        'farmer_name',
        'farmer_phone',
        'price',
    ];
    public function parent()
    {
        return $this->belongsTo(farm::class,'id');
}
}
