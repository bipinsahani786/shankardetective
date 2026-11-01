<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'is_verified' => 'boolean',
        'is_featured' => 'boolean',
        'rating' => 'integer',
    ];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)->orderBy('order', 'asc');
    }
}
