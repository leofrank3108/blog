<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Post;
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
        // \App\Models\User::factory(10)->create();
        
        User::create([
            'name' => 'leo cortesia',
            'email' => 'i@admin.com',
            'password' => bcrypt('123456')
        ]);

        Post::factory()->count(24)->create();
    }
}
