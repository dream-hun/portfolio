<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Livewire\Forms\TagForm;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class TagRow extends Component
{
    public $tag;

    public $tagEditModal;

    public $successIndicator = false;

    public TagForm $form;

    public function mount(Tag $tag): void
    {
        $this->tag = $tag;
        $this->form->setTag($this->tag);
    }

    public function save(): void
    {
        $this->form->update();
        $this->tag->refresh();
        $this->reset('tagEditModal');
        $this->dispatch('tagUpdated');
        $this->successIndicator = true;
    }

    public function render(): View
    {
        return view('livewire.tag-row');
    }
}
