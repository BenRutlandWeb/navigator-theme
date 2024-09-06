<?php

namespace App\Providers;

use Navigator\Events\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * @var array<string, array<class-string|callable>>
     */
    protected array $actions = [
        //
    ];

    /**
     * @var class-string<SubscriberInterface>[]
     */
    protected array $subscribers = [
        \App\Listeners\EnqueueScripts::class,
    ];
}
