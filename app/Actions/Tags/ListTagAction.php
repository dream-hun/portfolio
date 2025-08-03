<?php

declare(strict_types=1);

namespace App\Actions\Tags;

use App\Models\Tag;
use Illuminate\Pagination\LengthAwarePaginator;

final class ListTagAction
{
    public function handle(int $perPage = 10): LengthAwarePaginator
    {
        return Tag::query()
            ->orderBy('name')
            ->paginate($perPage);
    }
}
