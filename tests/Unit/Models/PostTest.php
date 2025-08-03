<?php

declare(strict_types=1);

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('post has tags relationship', function () {
    $post = Post::factory()->create();

    expect($post->tags())->toBeInstanceOf(BelongsToMany::class)
        ->and($post->tags)->toBeInstanceOf(Collection::class);
});

test('post can have tags attached', function () {
    $post = Post::factory()->create();
    $tags = Tag::factory()->count(3)->create();

    $post->tags()->attach($tags);

    expect($post->tags)->toHaveCount(3)
        ->and($post->tags->pluck('id')->toArray())->toEqual($tags->pluck('id')->toArray());
});

test('post can sync tags', function () {
    $post = Post::factory()->create();
    $initialTags = Tag::factory()->count(3)->create();
    $post->tags()->attach($initialTags);

    // Add new tags and remove some existing ones
    $newTags = Tag::factory()->count(2)->create();
    $tagsToKeep = $initialTags->take(1);
    $tagsToSync = $tagsToKeep->merge($newTags);

    $post->tags()->sync($tagsToSync);

    expect($post->tags()->count())->toBe(3)
        ->and($post->tags->pluck('id')->toArray())->toEqual($tagsToSync->pluck('id')->toArray());
});
