<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$app->make(\Illuminate\Contracts\Console\Kernel::class);

try {
    // Run migrations fresh with seeds
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--seed' => true]);
    echo "✓ Migrations and seeds executed successfully!\n";
} catch (\Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
    exit(1);
}
