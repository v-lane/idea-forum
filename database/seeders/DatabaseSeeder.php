<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Idea;
use App\Models\Like;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'username' => 'TestUser',
            'email' => 'test@example.com',
        ]);

        Idea::factory(15)->create();

        // // Create idea tied to the "TestUser", ID 11
        // Idea::factory()->create([
        //     'user_id' => 11,
        //     'title' => 'Test User Idea',
        //     'text' => 'This idea is tied to the Test User. It should display as the authenticaded user\'s idea if logged in.'
        // ]);

        Comment::factory(50)->create();

        Like::factory(100)->create();
        // Like::factory()->create([
        //     'user_id'=>11,
        //     'idea_id'=>16
        // ]);
    }
}
