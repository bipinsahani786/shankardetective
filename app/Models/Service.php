<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'why_needed' => 'array',
        'investigation_scope' => 'array',
        'methods_tools' => 'array',
        'process_steps' => 'array',
        'deliverables' => 'array',
        'faq_items' => 'array',
        'is_featured' => 'boolean',
    ];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeByCategory($query, string $category)
    {
        return $query->where('category', $category);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
