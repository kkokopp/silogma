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
        //
        $admin = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123'
        ]);

        $admin->assignRole('admin');


        $user = User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'user1234'
        ]);

        $user->assignRole('user');
    }
}
