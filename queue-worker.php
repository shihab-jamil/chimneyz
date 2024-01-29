<?php

// queue-worker.php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

$status = $kernel->handle(
    $input = new Symfony\Component\Console\Input\StringInput('queue:work'),
    new Symfony\Component\Console\Output\ConsoleOutput()
);

$kernel->terminate($input, $status);
exit($status);
