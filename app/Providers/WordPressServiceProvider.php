<?php

namespace App\Providers;

use Navigator\WordPress\WordPressServiceProvider as ServiceProvider;

class WordPressServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        add_theme_support('post-thumbnails');

        add_theme_support('post-formats', ['standard', 'aside', 'chat', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio']);
    }
}
