<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farm_crop extends Model
{
    protected $fillable=[
        'farm_id',
        'crop_id',
        'planted_on',
        'harvest_by',
        'year_planted',
        'status',
    ];

    public function  crop()
    {
        return $this->belongsTo(crop::class,'id');
    }

    public function  farm()
    {
        return $this->belongsTo(farm::class,'id');
    }
}
