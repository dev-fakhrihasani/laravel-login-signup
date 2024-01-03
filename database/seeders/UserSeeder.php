<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    User::create([
      'name' => 'Admin',
      'email' => 'admin@gmail.com',
      'role' => 'admin',
      'password' => bcrypt('admin123'),
    ]);

    User::create([
      'name' => 'Member',
      'email' => 'member@gmailcom',
      'role' => 'member',
      'password' => bcrypt('member123'),
    ]);
  }
}
