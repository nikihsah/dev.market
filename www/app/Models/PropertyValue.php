<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyValue extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'property_values_product_table');
    }

    public function property()
    {
        return $this->belongsTo(PropertyValue::class);
    }
}
