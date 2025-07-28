<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
final class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => (string) Str::uuid(),
            'site_name' => fake()->company(),
            'email' => fake()->safeEmail(),
            'github' => 'https://github.com/'.fake()->userName(),
            'twitter' => 'https://twitter.com/'.fake()->userName(),
            'instagram' => 'https://instagram.com/'.fake()->userName(),
            'facebook' => 'https://facebook.com/'.fake()->userName(),
            'linkedin' => 'https://linkedin.com/in/'.fake()->userName(),
            'youtube' => 'https://youtube.com/c/'.fake()->userName(),
            'tiktok' => fake()->boolean(70) ? 'https://tiktok.com/@'.fake()->userName() : null,
            'description' => fake()->paragraph(3),
            'status' => fake()->randomElement(['active', 'inactive']),
            'location' => fake()->city().', '.fake()->country(),
        ];
    }

    /**
     * Indicate that the setting is active.
     */
    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'active',
        ]);
    }

    /**
     * Indicate that the setting is inactive.
     */
    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'inactive',
        ]);
    }
}
