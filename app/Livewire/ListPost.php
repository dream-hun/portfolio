<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class ListPost extends Component
{
    public function delete($postId): void
    {
        $post = Post::find($postId);

        $post?->delete();

        sleep(1);
    }

    public function render(): View
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('livewire.list-post', ['posts' => $posts]);
    }
}
