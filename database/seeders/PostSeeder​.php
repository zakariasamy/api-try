<?php

namespace Database\Seeders;

use App\Models\API\Post;
use Illuminate\Database\Seeder;

class PostSeeder​ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->count(70)->create();
    }
}
