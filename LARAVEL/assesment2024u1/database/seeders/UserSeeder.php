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
            'name' => 'hola',
            'email' => 'hola@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::factory(10)->create(); //Crea 9 usuarios falsos con la factory de User
    }
}
