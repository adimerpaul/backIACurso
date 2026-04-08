<?php
// This script inserts 10 users into the SQLite database

$dbPath = __DIR__ . '/database/database.sqlite';

if (!file_exists($dbPath)) {
    die("Database file not found at $dbPath\n");
}

$pdo = new PDO("sqlite:" . $dbPath);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Define 10 users
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

// Delete existing users
$pdo->exec("DELETE FROM users");

// Insert users
$stmt = $pdo->prepare("INSERT INTO users (name, email, password, created_at, updated_at) VALUES (?, ?, ?, datetime('now'), datetime('now'))");

foreach ($users as $user) {
    $hashedPassword = password_hash('password123', PASSWORD_BCRYPT, ['cost' => 12]);
    $stmt->execute([$user['name'], $user['email'], $hashedPassword]);
    echo "Inserted: " . $user['name'] . "\n";
}

// Verify
$result = $pdo->query("SELECT COUNT(*) as total FROM users")->fetch(PDO::FETCH_ASSOC);
echo "\nTotal users in database: " . $result['total'] . "\n";

// List all users
echo "\nUsers in database:\n";
$users = $pdo->query("SELECT id, name, email FROM users")->fetchAll(PDO::FETCH_ASSOC);
foreach ($users as $user) {
    echo "- ID: {$user['id']}, Name: {$user['name']}, Email: {$user['email']}\n";
}
