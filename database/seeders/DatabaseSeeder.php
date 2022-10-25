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
            'name' => 'admin',
            'fullname' => 'Joona Brückner',
            'email' => 'joona.brueckner@gmail.com',
        ]);
        \App\Models\Post::factory()->create([
            'author' => 'admin',
            'content' => "this is a test"
        ]);
        \App\Models\Post::factory(10)->create([
            'author' => 'admin',
        ]);
    }
}
