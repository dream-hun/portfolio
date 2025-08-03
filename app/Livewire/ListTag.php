<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Actions\Tags\ListTagAction;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\Attributes\On;

final class ListTag extends Component
{
    public $notification = null;

    #[On('tagAdded')]
    public function refreshTags(): void
    {
        $this->notification = [
            'type' => 'success',
            'message' => 'Tag created successfully!'
        ];
    }

    #[On('tagUpdated')]
    public function handleTagUpdated(): void
    {
        $this->notification = [
            'type' => 'success',
            'message' => 'Tag updated successfully!'
        ];
    }

    public function delete($tagId): void
    {
        $tag = Tag::find($tagId);

        $tag->delete();

        $this->notification = [
            'type' => 'success',
            'message' => 'Tag deleted successfully!'
        ];
    }

    public function render(ListTagAction $action): View
    {
        $tags = $action->handle();

        return view('livewire.list-tag', ['tags' => $tags]);
    }
}
