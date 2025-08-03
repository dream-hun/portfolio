<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Livewire\Forms\TagForm;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CreateTagModal extends Component
{
    public TagForm $form;

    public $showAddModal = false;

    public $successIndicator = false;

    public function addTag(): void
    {
        $this->form->save();
        $this->reset('showAddModal');
        $this->dispatch('tagAdded');
        $this->successIndicator = true;
    }

    public function render(): View
    {
        return view('livewire.create-tag-modal');
    }
}
