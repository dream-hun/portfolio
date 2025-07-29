<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Actions\Settings\ListSettingsAction;
use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class ListSetting extends Component
{
    public function delete($settingId): void
    {
        $setting = Setting::find($settingId);
        $setting->delete();
        sleep(1);
    }

    public function render(ListSettingsAction $action): View
    {
        $settings = $action->handle();

        return view('livewire.list-setting', ['settings' => $settings]);
    }
}
