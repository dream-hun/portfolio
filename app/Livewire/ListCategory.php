<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Actions\Categories\ListCategoryAction;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\Attributes\On;

final class ListCategory extends Component
{
    public $notification = null;

    #[On('categoryAdded')]
    public function refreshCategories(): void
    {
        $this->notification = [
            'type' => 'success',
            'message' => 'Category created successfully!'
        ];
    }

    #[On('categoryUpdated')]
    public function handleCategoryUpdated(): void
    {
        $this->notification = [
            'type' => 'success',
            'message' => 'Category updated successfully!'
        ];
    }

    public function delete($postId): void
    {
        $category = Category::find($postId);

        $category->delete();

        $this->notification = [
            'type' => 'success',
            'message' => 'Category deleted successfully!'
        ];
    }

    public function render(ListCategoryAction $action): View
    {
        $categories = $action->handle();

        return view('livewire.list-category', ['categories' => $categories]);
    }
}
