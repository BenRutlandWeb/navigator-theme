<?php

namespace App\Models;

use Navigator\Database\Models\Concerns\HasChildren;

class Page extends Post
{
    use HasChildren;
}
