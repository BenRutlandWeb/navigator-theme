<?php

namespace App\Models;

use Navigator\Database\Models\Comment as Model;
use Navigator\Database\Models\Concerns\HasAuthor;
use Navigator\Database\Models\Concerns\HasChildren;

class Comment extends Model
{
    use HasAuthor;
    use HasChildren;

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
