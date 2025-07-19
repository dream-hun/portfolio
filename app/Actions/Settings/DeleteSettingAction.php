<?php

declare(strict_types=1);

namespace App\Actions\Settings;

use App\Models\Setting;

final class DeleteSettingAction
{
    /**
     * Handle the action to delete a setting.
     */
    public function handle(Setting $setting): bool
    {
        return $setting->delete();
    }
}
