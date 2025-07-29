<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Str;

final class Post extends Model
{
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'published_at' => 'datetime',
    ];

    public function getStatusColorAttribute(): string
    {
        return match ($this->status) {
            'published' => 'bg-green-50 text-green-700 ring-green-600/20',
            'draft' => 'bg-yellow-50 text-yellow-700 ring-yellow-600/20',
            'archived' => 'bg-gray-50 text-gray-700 ring-gray-600/20',
            default => 'bg-gray-50 text-gray-700 ring-gray-600/20',
        };
    }

    public function getExcerptAttribute(): string
    {
        return Str::limit(strip_tags($this->content));
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
