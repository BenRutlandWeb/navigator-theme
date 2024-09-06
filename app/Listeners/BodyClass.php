<?php

namespace App\Listeners;

use Navigator\Events\Listener;

use function Navigator\auth;

class BodyClass extends Listener
{
    public function __invoke(array $classes): array
    {
        if ($user = auth()->user()) {
            $classes[] = $user->meta()->get('color-scheme', 'color-scheme-system');
        }

        return $classes;
    }
}
