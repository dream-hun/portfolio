<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Livewire\Forms\SettingForm;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class AddSettingModal extends Component
{
    public SettingForm $form;

    public $showModal = false;

    public $successIndicator = false;

    public function add(): void
    {
        $this->form->save();
        $this->reset('showModal');
        $this->dispatch('created');
        $this->successIndicator = true;
    }

    public function render(): View
    {
        return view('livewire.add-setting-modal');
    }
}
