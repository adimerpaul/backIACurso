<?php

// Set the base path for Laravel
define('LARAVEL_START', microtime(true));

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);

// Run migrations fresh with seeds
$status = $kernel->call('migrate:fresh', ['--seed' => true]);

echo "Migration completed with status: $status\n";
