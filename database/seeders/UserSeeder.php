<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Juan García',
                'email' => 'juan.garcia@example.com',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'María Rodríguez',
                'email' => 'maria.rodriguez@example.com',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Carlos López',
                'email' => 'carlos.lopez@example.com',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Ana Martínez',
                'email' => 'ana.martinez@example.com',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Pedro Fernández',
                'email' => 'pedro.fernandez@example.com',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Laura Sánchez',
                'email' => 'laura.sanchez@example.com',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Diego Gómez',
                'email' => 'diego.gomez@example.com',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Sofia Morales',
                'email' => 'sofia.morales@example.com',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Miguel Hernández',
                'email' => 'miguel.hernandez@example.com',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Isabela Romero',
                'email' => 'isabela.romero@example.com',
                'password' => bcrypt('password123'),
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
