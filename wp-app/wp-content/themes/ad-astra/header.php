<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ad-astra</title>
</head>

<body>
    <nav>
        <div class="navbar-wrapper">
            <div>
                <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
                    ad-astra
                </a>
            </div>

            <div class="link-container">
                <?php
                $args = array(
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'menu_class' => 'link-container',
                );
                wp_nav_menu($args);
                ?>
            </div>
        </div>
    </nav>

    <?php wp_footer(); ?>
</body>

</html>
