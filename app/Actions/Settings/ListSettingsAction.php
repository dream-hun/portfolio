<?php

declare(strict_types=1);

namespace App\Actions\Settings;

use App\Models\Setting;
use Illuminate\Pagination\LengthAwarePaginator;

final class ListSettingsAction
{
    /**
     * Handle the action to list all settings with pagination.
     */
    public function handle(int $perPage = 10): LengthAwarePaginator
    {
        return Setting::query()
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }
}
