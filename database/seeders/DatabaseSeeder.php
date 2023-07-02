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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $work = Category::create([
            "name" => "Work",
            "slug" => "work"
        ]);

        $coding = Category::create([
            "name" => "Coding",
            "slug" => "coding"
        ]);

        $hobby = Category::create([
            "name" => "Hobby",
            "slug" => "hobby"
        ]);

        Post::create([
            "user_id" => $user->id,
            "category_id" => $work->id,
            "title" => "Eloquent models",
            "slug" => "my-work-post",
            "excerpt" => "Just an excerpt",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quas doloribus, assumenda accusantium soluta, illo iste recusandae, fugit quidem odio eius minus similique totam possimus! Iure inventore blanditiis omnis ipsam provident ut repellat doloribus?"
        ]);

        Post::create([
            "user_id" => $user->id,
            "category_id" => $coding->id,
            "title" => "Mass migration",
            "slug" => "my-coding-post",
            "excerpt" => "Just an excerpt",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quas doloribus, assumenda accusantium soluta, illo iste recusandae, fugit quidem odio eius minus similique totam possimus! Iure inventore blanditiis omnis ipsam provident ut repellat doloribus?"
        ]);

        Post::create([
            "user_id" => $user->id,
            "category_id" => $hobby->id,
            "title" => "Route model binding",
            "slug" => "my-hobby-post",
            "excerpt" => "Just an excerpt",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quas doloribus, assumenda accusantium soluta, illo iste recusandae, fugit quidem odio eius minus similique totam possimus! Iure inventore blanditiis omnis ipsam provident ut repellat doloribus?"
        ]);

    }
}