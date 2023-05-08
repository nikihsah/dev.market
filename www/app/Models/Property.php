<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function propertyValues()
    {
        return $this->belongsToMany(PropertyValue::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
