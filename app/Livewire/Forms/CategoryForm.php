<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;

final class CategoryForm extends Form
{
    /**
     * @var mixed
     */
    public $slug;

    #[Validate('required|min:3|max:255')]
    public $name = '';

    #[Validate('in:active,inactive')]
    public $status = 'active';

    #[Validate('required|min:120|max:720|string')]
    public string $description = '';

    public Category $category;

    public function setCategory(Category $category): void
    {
        $this->category = $category;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->status = $category->status;
        $this->description = $category->description;
    }

    public function save(): void
    {
        $this->validate();
        Category::create([
            'uuid' => Str::uuid()->toString(),
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'status' => $this->status,
            'description' => $this->description,
        ]);
        $this->reset(['name', 'slug', 'status', 'description']);
    }

    public function update(): void
    {
        $this->validate();
        $this->category->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'status' => $this->status,
            'description' => $this->description,
        ]);

    }
}
