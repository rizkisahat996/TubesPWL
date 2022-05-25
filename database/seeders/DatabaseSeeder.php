<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
        User::factory(10)->create();

        Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);

        Category::create([
            'name' => 'Soccer',
            'slug' => 'soccer'
        ]);

        Category::create([
            'name' => 'Gambling',
            'slug' => 'gambling'
        ]);

        Category::create([
            'name' => 'Religion',
            'slug' => 'religion'
        ]);

        Category::create([
            'name' => 'Education',
            'slug' => 'education'
        ]);

        Category::create([
            'name' => 'Hiking',
            'slug' => 'hiking'
        ]);

        Post::factory(40)->create();
    }
}
