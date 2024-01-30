<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::create([
            'name' => 'Admin John',
            'email' => 'john@example.com',
            'password'=> Hash::make('12345678'),
            'roles'=> 'ADMIN',
            'phone'=> '0812345678',
        ]);
    }
}
