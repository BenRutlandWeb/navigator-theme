<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <?php echo Navigator\view('header'); ?>

    <main class="is-layout-constrained has-global-padding">

        <?php echo Navigator\app(Navigator\View\BaseWrapper::class)->template(); ?>

    </main>

    <?php echo Navigator\view('footer'); ?>

    <?php wp_footer(); ?>
</body>

</html>