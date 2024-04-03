<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Crează rolul de Admin
        Role::create(['name' => 'Admin']);

        // Crează rolul de Manager
        Role::create(['name' => 'Manager']);

        // Crează rolul de Client
        Role::create(['name' => 'Client']);
    }
}
