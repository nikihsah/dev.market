<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConditionPromocode extends Model
{
    use HasFactory;

    public function promocodes()
    {
        return $this->hasMany(Promocode::class);
    }
}
