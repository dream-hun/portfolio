<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class PostRow extends Component
{
    public $post;

    public $postEditModal = false;

    public $successIndicator = false;

    public PostForm $form;

    public $categories = [];

    public $tags = [];

    public function mount(Post $post): void
    {
        $this->post = $post;
        $this->form->setPost($this->post);
        $this->loadCategories();
        $this->loadTags();
    }

    private function loadCategories(): void
    {
        $this->categories = Category::query()->orderBy('name')->get();
    }

    private function loadTags(): void
    {
        $this->tags = Tag::query()->orderBy('name')->get();
    }

    public function save(): void
    {
        $this->form->update();
        $this->post->refresh();
        $this->reset('postEditModal');
        $this->dispatch('postUpdated');
        $this->successIndicator = true;
    }

    public function render(): View
    {
        return view('livewire.post-row');
    }
}
