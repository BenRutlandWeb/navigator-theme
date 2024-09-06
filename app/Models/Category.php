<?php

namespace App\Models;

use Navigator\Database\Models\Concerns\HasChildren;
use Navigator\Database\Models\Term;

class Category extends Term
{
    use HasChildren;

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
