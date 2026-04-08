#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

// Bootstrap Laravel
$app = require __DIR__ . '/bootstrap/app.php';

// Get the database connection
use Illuminate\Support\Facades\DB;

$app->make(\Illuminate\Contracts\Console\Kernel::class);

// Delete existing users
DB::table('users')->delete();

// Insert 10 users  
$users = [
    ['name' => 'Juan García', 'email' => 'juan.garcia@example.com'],
    ['name' => 'María Rodríguez', 'email' => 'maria.rodriguez@example.com'],
    ['name' => 'Carlos López', 'email' => 'carlos.lopez@example.com'],
    ['name' => 'Ana Martínez', 'email' => 'ana.martinez@example.com'],
    ['name' => 'Pedro Fernández', 'email' => 'pedro.fernandez@example.com'],
    ['name' => 'Laura Sánchez', 'email' => 'laura.sanchez@example.com'],
    ['name' => 'Diego Gómez', 'email' => 'diego.gomez@example.com'],
    ['name' => 'Sofia Morales', 'email' => 'sofia.morales@example.com'],
    ['name' => 'Miguel Hernández', 'email' => 'miguel.hernandez@example.com'],
    ['name' => 'Isabela Romero', 'email' => 'isabela.romero@example.com'],
];

foreach ($users as $user) {
    $user['password'] = bcrypt('password123');
    DB::table('users')->insert($user);
    echo "✓ Inserted: {$user['name']}\n";
}

$count = DB::table('users')->count();
echo "\n✓ Total users in database: $count\n";
