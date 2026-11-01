<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'is_hq' => 'boolean',
        'popular_services' => 'array',
        'local_landmarks' => 'array',
        'local_faq' => 'array',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
