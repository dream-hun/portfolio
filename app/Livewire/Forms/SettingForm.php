<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Models\Setting;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;

final class SettingForm extends Form
{
    #[Validate('required|min:3|max:30')]
    public $site_name = '';

    #[Validate('required|email|min:5|max:255')]
    public $email = '';

    #[Validate('required|url|min:4|max:255')]
    public $github = '';

    #[Validate('required|url|min:4|max:255')]
    public $twitter = '';

    #[Validate('required|url|min:4|max:255')]
    public $instagram = '';

    #[Validate('required|url|min:4|max:255')]
    public $facebook = '';

    #[Validate('required|url|min:4|max:255')]
    public $linkedin = '';

    #[Validate('required|url|min:4|max:255')]
    public $youtube = '';

    #[Validate('required|url|min:4|max:255')]
    public $tiktok = '';

    #[Validate('required|string|min:4|max:650')]
    public $description = '';

    public Setting $setting;

    public function setSetting(Setting $setting): void
    {
        $this->setting = $setting;
        $this->site_name = $setting->site_name;
        $this->email = $setting->email;
        $this->github = $setting->github;
        $this->twitter = $setting->twitter;
        $this->instagram = $setting->instagram;
        $this->facebook = $setting->facebook;
        $this->linkedin = $setting->linkedin;
        $this->youtube = $setting->youtube;
        $this->tiktok = $setting->tiktok;
        $this->description = $setting->description;

    }

    public function save(): void
    {
        $this->validate();
        Setting::create([
            'uuid' => Str::uuid(),
            'site_name' => $this->site_name,
            'email' => $this->email,
            'github' => $this->github,
            'twitter' => $this->twitter,
            'instagram' => $this->instagram,
            'facebook' => $this->facebook,
            'linkedin' => $this->linkedin,
            'youtube' => $this->youtube,
            'tiktok' => $this->tiktok,
            'description' => $this->description,

        ]);
        $this->reset(['site_name', 'email', 'github', 'twitter', 'instagram', 'facebook', 'linkedin', 'youtube', 'tiktok', 'description']);
    }

    public function update(): void
    {
        $this->validate();
        $this->setting->update([
            'site_name' => $this->site_name,
            'email' => $this->email,
            'github' => $this->github,
            'twitter' => $this->twitter,
            'instagram' => $this->instagram,
            'facebook' => $this->facebook,
            'linkedin' => $this->linkedin,
            'youtube' => $this->youtube,
            'tiktok' => $this->tiktok,
            'description' => $this->description,
        ]);
    }
}
