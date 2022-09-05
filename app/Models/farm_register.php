<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farm_register extends Model
{
    protected $fillable=[
        'farm_crop_id',
        'category_id',
        'total_cost',
        'quantity',
        'description',
        'date_created',
    ];

    public function categoryparent()
    {
        return $this->belongsTo(category::class,'id');

}

    public function farmcrop()
    {
        return $this->belongsTo(farm_crop::class,'id');
}
}
