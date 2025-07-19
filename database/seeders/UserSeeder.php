<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

final class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'uuid' => Str::uuid(),
                'name' => 'MBABAZI Jacques',
                'email' => 'mbabazijacques@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ],

        ];
        User::insert($users);
    }
}
