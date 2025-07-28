<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

final class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'uuid' => Str::uuid(),
                'name' => 'Web Development',
                'slug' => Str::slug('Web Development'),
                'status' => 'active',
                'description' => 'Explore professional web development examples, tips, and projects to enhance your Laravel and full-stack development skills.',
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Laravel',
                'slug' => Str::slug('Laravel'),
                'status' => 'active',
                'description' => 'Learn Laravel with practical tutorials and real-world project guides for faster, efficient PHP development.',
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Career Guidance',
                'slug' => Str::slug('Career Guidance'),
                'status' => 'active',
                'description' => 'Get insightful career advice, growth strategies, and mentorship tips to build a successful tech career.',
            ],

            [
                'uuid' => Str::uuid(),
                'name' => 'Talks',
                'slug' => Str::slug('Talks'),
                'status' => 'active',
                'description' => 'Listen to engaging podcast episodes covering technology, career, and personal development topics.',
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Blog',
                'slug' => Str::slug('Blog'),
                'status' => 'active',
                'description' => 'View a creative photography portfolio featuring nature, portraits, and events with captivating visual stories.',
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Projects',
                'slug' => Str::slug('Projects'),
                'status' => 'active',
                'description' => 'I have completed different projects that.',
            ],
        ];
        Category::insert($categories);

    }
}
