<?php

namespace App\Providers;

use Navigator\Routing\Router;
use Navigator\Routing\RoutingServiceProvider as ServiceProvider;

class RoutingServiceProvider extends ServiceProvider
{
    public function registerRoutes(Router $router): void
    {
        // $router->get('api/hello-world', fn() => 'Hello World!');
    }
}
