<?php

declare(strict_types=1);

namespace App\Actions\Categories;

use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;

final class ListCategoryAction
{
    public function handle(int $perPage = 10): LengthAwarePaginator
    {
        return Category::query()
            ->orderBy('name')
            ->paginate($perPage);
    }
}
