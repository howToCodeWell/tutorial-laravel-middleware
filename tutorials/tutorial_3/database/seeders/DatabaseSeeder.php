<?php

namespace Database\Seeders;

use App\Models\Role;
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
        // User::factory(10)->create();

        $editorRole = Role::factory()->create([
            'name' => 'editor',
            'description' => 'An editor'
        ]);

        $reviewerRole = Role::factory()->create([
            'name' => 'reviewer',
            'description' => 'A reviewer'
        ]);

        $managerRole = Role::factory()->create([
            'name' => 'manager',
            'description' => 'A manager'
        ]);

        User::factory()->create([
            'name' => 'Test User 1',
            'email' => 'test1@example.com',
            'role_id' => $editorRole->id
        ]);

        User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            'role_id' => $managerRole->id
        ]);
    }
}
