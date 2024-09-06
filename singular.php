<?php

use App\Models\Chore;
use App\Models\Post;
use App\Models\Sensei\Teacher;
use App\Models\Team;
use App\Models\User;
use App\Models\Sensei\Student;
use Navigator\Str\Str;

add_filter('excerpt_length', function ($length) {
    return 15;
});
add_filter('excerpt_more', function () {
    return Str::ELLIPSIS;
});

?>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>