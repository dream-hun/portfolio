<?php

declare(strict_types=1);

namespace App\Actions\Settings;

use App\Models\Setting;

final class UpdateSettingAction
{
    /**
     * Handle the action to update an existing setting.
     *
     * @param array<string, mixed> $data
     */
    public function handle(Setting $setting, array $data): Setting
    {
        $setting->site_name = $data['site_name'];
        $setting->email = $data['email'] ?? null;
        $setting->github = $data['github'];
        $setting->twitter = $data['twitter'];
        $setting->instagram = $data['instagram'];
        $setting->facebook = $data['facebook'];
        $setting->linkedin = $data['linkedin'];
        $setting->youtube = $data['youtube'];
        $setting->tiktok = $data['tiktok'] ?? null;
        $setting->description = $data['description'];
        $setting->status = $data['status'] ?? 'active';
        $setting->location = $data['location'];
        $setting->save();

        return $setting;
    }
}
