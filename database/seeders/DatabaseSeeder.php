<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(40)->create();

        User::create([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
