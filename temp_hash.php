<?php
require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "Bcrypt хеш для '731055@Ivv':\n";
echo Illuminate\Support\Facades\Hash::make('731055@Ivv');
echo "\n";