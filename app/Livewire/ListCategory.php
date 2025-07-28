<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Actions\Categories\ListCategoryAction;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class ListCategory extends Component
{
    public function delete($postId): void
    {
        $category = Category::find($postId);

        $category->delete();

        sleep(1);
    }
    public function render(ListCategoryAction $action): View
    {
        $categories = $action->handle();

        return view('livewire.list-category', ['categories' => $categories]);
    }
}
