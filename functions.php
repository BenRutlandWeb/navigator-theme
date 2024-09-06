<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Navigator\Foundation\Application(__DIR__);

$app->register(App\Providers\AppServiceProvider::class);
$app->register(App\Providers\EventServiceProvider::class);
$app->register(App\Providers\RoutingServiceProvider::class);
$app->register(App\Providers\ScheduleServiceProvider::class);
$app->register(App\Providers\WordPressServiceProvider::class);

$app->boot();
