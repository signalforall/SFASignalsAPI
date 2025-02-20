<?php

require __DIR__.'/vendor/autoload.php';

use Illuminate\Contracts\Console\Kernel;

$app = require_once __DIR__.'/bootstrap/app.php';

$app->make(Kernel::class)->bootstrap();

use Illuminate\Support\Facades\DB;

$results = DB::table('subscriptions')->get();

echo "<pre>";
print_r($results);
echo "</pre>";