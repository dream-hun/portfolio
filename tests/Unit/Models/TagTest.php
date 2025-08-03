<?php

declare(strict_types=1);

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('tag has posts relationship', function () {
    $tag = Tag::factory()->create();

    expect($tag->posts())->toBeInstanceOf(\Illuminate\Database\Eloquent\Relations\BelongsToMany::class)
        ->and($tag->posts)->toBeInstanceOf(Collection::class);
});

test('tag can be attached to posts', function () {
    $tag = Tag::factory()->create();
    $posts = Post::factory()->count(3)->create();

    $tag->posts()->attach($posts);

    expect($tag->posts)->toHaveCount(3)
        ->and($tag->posts->pluck('id')->toArray())->toEqual($posts->pluck('id')->toArray());
});
