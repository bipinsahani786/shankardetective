<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'is_featured' => 'boolean',
        'timeline_days' => 'integer',
    ];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)->orderBy('order', 'asc');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
