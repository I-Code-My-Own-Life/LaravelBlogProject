<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => "Eman amir"
        ]);    
        // Seeding posts table : 
        Post::factory(5)->create([
            "user_id" => $user->id
        ]);
    }
}