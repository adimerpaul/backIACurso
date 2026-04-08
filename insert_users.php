<?php

$dbPath = __DIR__ . '/database/database.sqlite';

try {
    $pdo = new PDO("sqlite:" . $dbPath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected to SQLite database\n";
    
    // Check if users table exists
    $stmt = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='users'");
    if (!$stmt->fetch()) {
        echo "Users table does not exist. Creating...\n";
        $pdo->exec("
            CREATE TABLE users (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                email TEXT UNIQUE NOT NULL,
                email_verified_at DATETIME NULL,
                password TEXT NOT NULL,
                remember_token TEXT NULL,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )
        ");
        echo "✓ Users table created\n";
    }
    
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
    
    // Clear existing users
    $pdo->exec("DELETE FROM users");
    
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    
    foreach ($users as $user) {
        $hashedPassword = password_hash('password123', PASSWORD_BCRYPT, ['cost' => 12]);
        $stmt->execute([$user['name'], $user['email'], $hashedPassword]);
    }
    
    echo "✓ 10 users inserted successfully!\n";
    
    // Verify
    $count = $pdo->query("SELECT COUNT(*) as total FROM users")->fetch(PDO::FETCH_ASSOC);
    echo "✓ Total users in database: " . $count['total'] . "\n";
    
} catch (\Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
    exit(1);
}
