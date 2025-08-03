<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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

    #[Validate('required|exists:categories,id')]
    public $category_id;

    #[Validate('array')]
    #[Validate('exists:tags,id')]
    public $tags = [];

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
        $this->category_id = $post->category_id;
        $this->tags = $post->tags->pluck('id')->toArray();
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

        $post = Post::create([
            'uuid' => Str::uuid()->toString(),
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'content' => $this->content,
            'category_id' => $this->category_id,
            'status' => $this->status,
            'published_at' => $publishedAt,
            'featured_image' => $this->featured_image ?? '',
        ]);

        if (!empty($this->tags)) {
            $post->tags()->attach($this->tags);
        }

        $this->reset(['title', 'slug', 'content', 'category_id', 'tags', 'status', 'published_at', 'featured_image']);
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
            'category_id' => $this->category_id,
            'status' => $this->status,
            'published_at' => $publishedAt,
            'featured_image' => $this->featured_image,
        ]);

        // Sync tags (attach new ones, detach removed ones)
        $this->post->tags()->sync($this->tags);
    }
}
