<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Livewire\Forms\SettingForm;
use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class SettingRow extends Component
{
    public $setting;

    public SettingForm $settingForm;

    public $successIndicator = false;

    public $showEditModal = false;

    public function mount(Setting $setting): void
    {
        $this->settingForm->setSetting($this->setting);
    }

    public function save(): void
    {
        $this->settingForm->update();
        $this->setting->refresh();
        $this->reset('showEditModal');
        $this->successIndicator = true;
    }

    public function render(): View
    {
        return view('livewire.setting-row');
    }
}
