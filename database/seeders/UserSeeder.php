<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create specific users for the articles
        User::create([
            'name' => 'Ida',
            'email' => 'ida@edufun.com',
            'password' => Hash::make('password'),
            'image_url' => 'https://ui-avatars.com/api/?name=Ida&size=200&background=random',
        ]);

        User::create([
            'name' => 'Sabrina',
            'email' => 'sabrina@edufun.com',
            'password' => Hash::make('password'),
            'image_url' => 'https://ui-avatars.com/api/?name=Sabrina&size=200&background=random',
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'john@edufun.com',
            'password' => Hash::make('password'),
            'image_url' => 'https://ui-avatars.com/api/?name=John+Doe&size=200&background=random',
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@edufun.com',
            'password' => Hash::make('password'),
            'image_url' => 'https://ui-avatars.com/api/?name=Jane+Smith&size=200&background=random',
        ]);

        User::create([
            'name' => 'Michael Johnson',
            'email' => 'michael@edufun.com',
            'password' => Hash::make('password'),
            'image_url' => 'https://ui-avatars.com/api/?name=Michael+Johnson&size=200&background=random',
        ]);

        // Create additional random users with Faker
        User::factory(5)->create();
    }
}
