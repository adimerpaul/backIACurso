<?php

$dbPath = __DIR__ . '/database/database.sqlite';

if (!file_exists($dbPath)) {
    echo "Creating database file...\n";
    touch($dbPath);
}

try {
    $pdo = new PDO("sqlite:" . $dbPath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected to SQLite database\n";
    
    // First, let's run Laravel migrations
    require __DIR__ . '/vendor/autoload.php';
    $app = require_once __DIR__ . '/bootstrap/app.php';
    $kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
    
    echo "Running migrations...\n";
    $kernel->call('migrate:fresh', ['--seed' => true, '--force' => true]);
    
    echo "✓ Database migrations and seeds completed successfully!\n";
    
} catch (\Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . "\n";
    echo "Line: " . $e->getLine() . "\n";
    exit(1);
}
