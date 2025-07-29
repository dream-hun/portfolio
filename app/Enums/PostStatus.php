<?php

namespace App\Enums;

enum PostStatus: string
{
    case Draft = 'draft';
    case Published = 'published';
    case Archived = 'archived';

    public function color(): string
    {
        return match ($this) {
            self::Published => 'bg-green-50 text-green-700 ring-green-600/20',
            self::Draft     => 'bg-yellow-50 text-yellow-700 ring-yellow-600/20',
            self::Archived  => 'bg-gray-50 text-gray-700 ring-gray-600/20',
        };
    }

    public function label(): string
    {
        return match ($this) {
            self::Published => 'Published',
            self::Draft     => 'Draft',
            self::Archived  => 'Archived',
        };
    }
}
