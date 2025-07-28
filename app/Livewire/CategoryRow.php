<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Livewire\Forms\CategoryForm;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CategoryRow extends Component
{
    public $category;

    public $categoryEditModal;

    public $successIndicator = false;

    public CategoryForm $form;

    public function mount(Category $category): void
    {
        $this->form->setCategory($this->category);
    }

    public function save(): void
    {
        $this->form->update();
        $this->category->refresh();
        $this->reset('categoryEditModal');
        $this->successIndicator = true;
    }

    public function render(): View
    {
        return view('livewire.category-row');
    }
}
