<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected $fillable = [
        'group',
        'key',
        'label',
        'value',
        'type',
    ];

    public static function get(string $key, $default = null)
    {
        try {
            $setting = static::where('key', $key)->first();
            return $setting ? ($setting->value ?? $default) : $default;
        } catch (\Throwable $e) {
            return $default;
        }
    }

    public static function set(string $key, $value, ?string $label = null, string $group = 'social'): void
    {
        static::updateOrCreate(
            ['key' => $key],
            [
                'value' => $value,
                'label' => $label ?? ucwords(str_replace('_', ' ', $key)),
                'group' => $group,
            ]
        );
    }
}

