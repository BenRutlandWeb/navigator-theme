<?php

namespace App\Listeners;

use Navigator\Contracts\SubscriberInterface;
use Navigator\Events\Dispatcher;

use function Navigator\mix;

class EnqueueScripts implements SubscriberInterface
{
    public function subscribe(Dispatcher $dispatcher): void
    {
        $dispatcher->listen('wp_enqueue_scripts', function () {
            wp_enqueue_style('main', mix('css/main.css'), [], null, 'screen');
            // wp_enqueue_script('main', mix('js/main.js'), [], null, ['strategy' => 'async', 'in_footer' => true]);

            wp_enqueue_script_module('main', mix('js/main.js'), ['@wordpress/interactivity'], null);
        });

        $dispatcher->listen('admin_enqueue_scripts', function () {
            wp_enqueue_style('admin', mix('css/admin.css'), [], null, 'screen');
            wp_enqueue_script('admin', mix('js/admin.js'), [], null, ['strategy' => 'async', 'in_footer' => true]);
        });
    }
}
