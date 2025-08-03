<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Models\Tag;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;

final class TagForm extends Form
{
    /**
     * @var mixed
     */
    public $slug;

    #[Validate('required|min:2|max:255')]
    public $name = '';

    public Tag $tag;

    public function setTag(Tag $tag): void
    {
        $this->tag = $tag;
        $this->name = $tag->name;
        $this->slug = $tag->slug;
    }

    public function save(): void
    {
        $this->validate();
        Tag::create([
            'uuid' => Str::uuid()->toString(),
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);
        $this->reset(['name', 'slug']);
    }

    public function update(): void
    {
        $this->validate();
        $this->tag->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);
    }
}
