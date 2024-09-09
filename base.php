<?php

use Navigator\View\BaseWrapper;

use function Navigator\app;
use function Navigator\view;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <?php echo view('header'); ?>

    <main class="is-layout-constrained has-global-padding">

        <?php echo app(BaseWrapper::class)->template(); ?>

    </main>

    <?php echo view('footer'); ?>

    <?php wp_footer(); ?>
</body>

</html>