<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class CreatePostModal extends Component
{
    public PostForm $form;

    public $showAddModal = false;

    public $successIndicator = false;

    public function addPost(): void
    {
        $this->form->save();
        $this->reset('showAddModal');
        $this->dispatch('postAdded');
        $this->successIndicator = true;
    }

    public function render(): View
    {
        return view('livewire.create-post-modal');
    }
}
