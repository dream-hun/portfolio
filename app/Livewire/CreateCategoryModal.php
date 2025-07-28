<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Livewire\Forms\CategoryForm;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CreateCategoryModal extends Component
{
    public CategoryForm $form;

    public $showAddModal = false;

    public $successIndicator = false;

    public function addCategory(): void
    {
        $this->form->save();
        $this->reset('showAddModal');
        $this->dispatch('categoryAdded');
        $this->successIndicator = true;
    }

    public function render(): View
    {
        return view('livewire.create-category-modal');
    }
}
