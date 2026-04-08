<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Juan García',
                'email' => 'juan.garcia@example.com',
                'phone' => '+34 612 345 678',
                'city' => 'Madrid',
                'country' => 'España'
            ],
            [
                'id' => 2,
                'name' => 'María Rodríguez',
                'email' => 'maria.rodriguez@example.com',
                'phone' => '+34 612 345 679',
                'city' => 'Barcelona',
                'country' => 'España'
            ],
            [
                'id' => 3,
                'name' => 'Carlos López',
                'email' => 'carlos.lopez@example.com',
                'phone' => '+34 612 345 680',
                'city' => 'Valencia',
                'country' => 'España'
            ],
            [
                'id' => 4,
                'name' => 'Ana Martínez',
                'email' => 'ana.martinez@example.com',
                'phone' => '+34 612 345 681',
                'city' => 'Sevilla',
                'country' => 'España'
            ],
            [
                'id' => 5,
                'name' => 'Pedro Fernández',
                'email' => 'pedro.fernandez@example.com',
                'phone' => '+34 612 345 682',
                'city' => 'Bilbao',
                'country' => 'España'
            ],
            [
                'id' => 6,
                'name' => 'Laura Sánchez',
                'email' => 'laura.sanchez@example.com',
                'phone' => '+34 612 345 683',
                'city' => 'Málaga',
                'country' => 'España'
            ],
            [
                'id' => 7,
                'name' => 'Diego Gómez',
                'email' => 'diego.gomez@example.com',
                'phone' => '+34 612 345 684',
                'city' => 'Alicante',
                'country' => 'España'
            ],
            [
                'id' => 8,
                'name' => 'Sofia Morales',
                'email' => 'sofia.morales@example.com',
                'phone' => '+34 612 345 685',
                'city' => 'Córdoba',
                'country' => 'España'
            ],
            [
                'id' => 9,
                'name' => 'Miguel Hernández',
                'email' => 'miguel.hernandez@example.com',
                'phone' => '+34 612 345 686',
                'city' => 'Murcia',
                'country' => 'España'
            ],
            [
                'id' => 10,
                'name' => 'Isabela Romero',
                'email' => 'isabela.romero@example.com',
                'phone' => '+34 612 345 687',
                'city' => 'Palma',
                'country' => 'España'
            ]
        ];

        return response()->json([
            'success' => true,
            'message' => 'Usuarios obtenidos correctamente',
            'data' => $users,
            'total' => count($users)
        ]);
    }

    public function show($id)
    {
        $users = $this->getAllUsers();
        $user = collect($users)->firstWhere('id', $id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Usuario no encontrado'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Usuario obtenido correctamente',
            'data' => $user
        ]);
    }

    private function getAllUsers()
    {
        return [
            ['id' => 1, 'name' => 'Juan García', 'email' => 'juan.garcia@example.com', 'phone' => '+34 612 345 678', 'city' => 'Madrid', 'country' => 'España'],
            ['id' => 2, 'name' => 'María Rodríguez', 'email' => 'maria.rodriguez@example.com', 'phone' => '+34 612 345 679', 'city' => 'Barcelona', 'country' => 'España'],
            ['id' => 3, 'name' => 'Carlos López', 'email' => 'carlos.lopez@example.com', 'phone' => '+34 612 345 680', 'city' => 'Valencia', 'country' => 'España'],
            ['id' => 4, 'name' => 'Ana Martínez', 'email' => 'ana.martinez@example.com', 'phone' => '+34 612 345 681', 'city' => 'Sevilla', 'country' => 'España'],
            ['id' => 5, 'name' => 'Pedro Fernández', 'email' => 'pedro.fernandez@example.com', 'phone' => '+34 612 345 682', 'city' => 'Bilbao', 'country' => 'España'],
            ['id' => 6, 'name' => 'Laura Sánchez', 'email' => 'laura.sanchez@example.com', 'phone' => '+34 612 345 683', 'city' => 'Málaga', 'country' => 'España'],
            ['id' => 7, 'name' => 'Diego Gómez', 'email' => 'diego.gomez@example.com', 'phone' => '+34 612 345 684', 'city' => 'Alicante', 'country' => 'España'],
            ['id' => 8, 'name' => 'Sofia Morales', 'email' => 'sofia.morales@example.com', 'phone' => '+34 612 345 685', 'city' => 'Córdoba', 'country' => 'España'],
            ['id' => 9, 'name' => 'Miguel Hernández', 'email' => 'miguel.hernandez@example.com', 'phone' => '+34 612 345 686', 'city' => 'Murcia', 'country' => 'España'],
            ['id' => 10, 'name' => 'Isabela Romero', 'email' => 'isabela.romero@example.com', 'phone' => '+34 612 345 687', 'city' => 'Palma', 'country' => 'España']
        ];
    }
}
