<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // Define roles and permissions and assign them here
    $adminRole = Role::create(['name' => 'SuperAdmin']);
    $authorRole = Role::create(['name' => 'author']);

    $showCommentsPermssion = Permission::create(['name' => 'show comments']);

    // Assign roles to specific users if needed
    $user = User::factory()->create([
      'name' => 'Admin',
      'email' => 'admin@gmail.com', //password: password
    ]);
    $user->assignRole($adminRole);

    // Grant permissions to roles
    $adminRole->givePermissionTo($showCommentsPermssion);

    // \App\Models\User::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}
