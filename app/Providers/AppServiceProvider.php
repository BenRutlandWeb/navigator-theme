<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Page;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Navigator\Database\Relation;
use Navigator\Foundation\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Relation::enforceMorphMap([
            'user'     => User::class,
            'post'     => Post::class,
            'page'     => Page::class,
            'category' => Category::class,
            'post_tag' => Tag::class,
            'comment'  => Comment::class,
        ]);
    }
}
