<?php

namespace App\Providers;

use Navigator\Schedule\Schedule;
use Navigator\Schedule\ScheduleServiceProvider as ServiceProvider;

class ScheduleServiceProvider extends ServiceProvider
{
    public function schedule(Schedule $schedule): void
    {
        # $schedule->call(fn() => '')->dailyAt('23:59:59')->timezone('Europe/London');
    }
}
