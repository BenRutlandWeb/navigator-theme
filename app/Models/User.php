<?php

namespace App\Models;

use App\Models\Concerns\HasTeams;
use Navigator\Acf\Models\Concerns\HasAcfFields;
use Navigator\Database\Models\User as Model;

class User extends Model
{
    use HasAcfFields;
    use HasTeams;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
