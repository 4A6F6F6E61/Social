<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'jb',
            'fullname' => 'Joona Brückner',
            'email' => 'test@example.com',
        ]);
        \App\Models\Post::factory()->create([
            'author' => 'jb',
            'content' => "this is a test"
        ]);
    }
}
