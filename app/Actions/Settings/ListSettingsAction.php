<?php

declare(strict_types=1);

namespace App\Actions\Settings;

use App\Models\Setting;
use Illuminate\Pagination\LengthAwarePaginator;

final class ListSettingsAction
{
    public function handle(int $perPage = 10): LengthAwarePaginator
    {
        return Setting::query()
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }
}
