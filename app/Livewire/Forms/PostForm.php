<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;

final class PostForm extends Form
{
    public $slug;

    #[Validate('required|min:3|max:255')]
    public $title = '';

    #[Validate('required|min:50')]
    public string $content = '';

    #[Validate('in:draft,published,archived')]
    public $status = 'draft';

    #[Validate('nullable|date')]
    public $published_at;

    #[Validate('nullable|string|max:255')]
    public $featured_image = '';

    public Post $post;

    public function setPost(Post $post): void
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->slug = $post->slug;
        $this->content = $post->content;
        $this->status = $post->status;
        $this->published_at = $post->published_at?->format('Y-m-d\TH:i');
        $this->featured_image = $post->featured_image;
    }

    public function save(): void
    {
        $this->validate();

        $publishedAt = $this->published_at
            ? Carbon::parse($this->published_at)
            : ($this->status === 'published' ? now() : null);

        Post::create([
            'uuid' => Str::uuid()->toString(),
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'content' => $this->content,
            'status' => $this->status,
            'published_at' => $publishedAt,
            'featured_image' => $this->featured_image ?? '',
        ]);

        $this->reset(['title', 'slug', 'content', 'status', 'published_at', 'featured_image']);
    }

    public function update(): void
    {
        $this->validate();

        $publishedAt = $this->published_at
            ? Carbon::parse($this->published_at)
            : ($this->status === 'published' && ! $this->post->published_at ? now() : $this->post->published_at);

        $this->post->update([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'content' => $this->content,
            'status' => $this->status,
            'published_at' => $publishedAt,
            'featured_image' => $this->featured_image,
        ]);
    }
}
