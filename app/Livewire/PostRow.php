<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class PostRow extends Component
{
    public $post;

    public $postEditModal = false;

    public $successIndicator = false;

    public PostForm $form;

    public function mount(Post $post): void
    {
        $this->post = $post;
        $this->form->setPost($this->post);
    }

    public function save(): void
    {
        $this->form->update();
        $this->post->refresh();
        $this->reset('postEditModal');
        $this->successIndicator = true;
    }

    public function render(): View
    {
        return view('livewire.post-row');
    }
}
