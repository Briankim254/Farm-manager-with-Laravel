<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farm extends Model
{
protected $fillable=[
    'name',
    'description',
    'size',
    'location',
    'created_on',
    ];

    public function children()
    {
        return $this->hasMany(farmLease::class,'farm_id');
    }
}
