<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Item::factory(20)->create();
        tap(['name' => 'user', 'email' => 'user@mail.com', 'password' => '12345678', 'password_confirmation' => '12345678', 'terms' => 1], function ($user) {
            app(CreatesNewUsers::class)->create($user);
        });

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
