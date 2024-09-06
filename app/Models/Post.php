<?php

namespace App\Models;

use Navigator\Database\Models\Concerns\HasAuthor;
use Navigator\Database\Models\Concerns\HasComments;
use Navigator\Database\Models\Concerns\HasContent;
use Navigator\Database\Models\Concerns\HasExcerpt;
use Navigator\Database\Models\Concerns\HasFeaturedImage;
use Navigator\Database\Models\Concerns\HasPostFormat;
use Navigator\Database\Models\Concerns\HasRevisions;
use Navigator\Database\Models\Concerns\HasTitle;
use Navigator\Database\Models\Post as Model;

class Post extends Model
{
    use HasAuthor;
    use HasComments;
    use HasContent;
    use HasExcerpt;
    use HasFeaturedImage;
    use HasPostFormat;
    use HasTitle;
    use HasRevisions;

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
