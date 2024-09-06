<?php

namespace App\Listeners;

use Navigator\Events\Listener;

class RegisterNavMenus extends Listener
{
    public function __invoke(): void
    {
        register_nav_menu('menu', __('Menu'));
    }
}
