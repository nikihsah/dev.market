<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function propertyValues()
    {
        return $this->belongsToMany(PropertyValue::class, 'property_values_product_table');
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function ratingReviews()
    {
        return $this->hasMany(RatingReview::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
