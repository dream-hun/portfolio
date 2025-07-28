<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

final class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            [
                'uuid' => Str::uuid(),
                'site_name' => 'J Talk Dev',
                'email' => 'hello@jtalkdev.com',
                'github' => 'https://github.com/dream-hun',
                'twitter' => 'https://x.com/jack_talk_c',
                'facebook' => 'https://facebook.com/james.tiger33886',
                'instagram' => 'https://instagram.com/jacquees_co',
                'youtube' => 'https://youtube.com/@JackTalkC',
                'linkedin' => 'https://linkedin.com/in/jtalkdev',
                'tiktok' => 'https://tiktok.com/jtalktech',

            ],
        ];

        Setting::insert($settings);
    }
}
