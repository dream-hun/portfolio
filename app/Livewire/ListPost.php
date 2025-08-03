<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\Attributes\On;

final class ListPost extends Component
{
    public $notification = null;

    #[On('postAdded')]
    public function refreshPosts(): void
    {
        $this->notification = [
            'type' => 'success',
            'message' => 'Post created successfully!'
        ];
    }

    #[On('postUpdated')]
    public function handlePostUpdated(): void
    {
        $this->notification = [
            'type' => 'success',
            'message' => 'Post updated successfully!'
        ];
    }

    public function delete($postId): void
    {
        $post = Post::find($postId);

        $post?->delete();

        $this->notification = [
            'type' => 'success',
            'message' => 'Post deleted successfully!'
        ];
    }

    public function render(): View
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('livewire.list-post', ['posts' => $posts]);
    }
}
