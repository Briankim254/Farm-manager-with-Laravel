<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $string1)
 */
class category extends Model
{
    protected $primaryKey ='id';
    protected $fillable = [
        'name',
        'description',
        'parent_category_id',
    ];


    /**
     * @return array
     */
    public function  parent()
    {
        return $this->belongsTo(category::class,'parent_category_id');
    }

    public function child()
    {
        return $this->hasMany(category::class,'parent_category_id');
}
}
