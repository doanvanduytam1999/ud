<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo THEME_URL . "/assets/favicon/apple-touch-icon.png" ?>" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo THEME_URL . "/assets/favicon/favicon-32x32.png" ?>" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo THEME_URL . "/assets/favicon/favicon-16x16.png" ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<?php wp_body_open(); ?>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="container">
            <a class="header__logo" id="logo" title="<?php bloginfo('description'); ?>"
                href="<?php echo esc_url(home_url()); ?>" aria-label="<?php bloginfo('sitename'); ?>">
                <img class="header__logo__img" src="<?php echo THEME_URL . "/assets/images/svg/logo-text.svg" ?>"
                    alt="<?php bloginfo('description'); ?>" />
            </a>
            <span class="header__hamburger hamburger"><i class="hamburger__line"></i></span>
            <nav class="header__nav">
                <?php 
                    $menuParameters = array(
                        'container'       => false,
                        'echo'            => false,
                        'items_wrap'      => '%3$s',
                        'depth'           => 0,
                        'add_class' => 'header__nav__item'
                    );
                    
                    echo strip_tags(wp_nav_menu($menuParameters), '<a>');
                ?>
                <a class="header__nav__item header__nav__item--login" href="">Log in</a>
                <button class="header__nav__item--trial btn">Try for free</button>
            </nav>
        </div>
    </header>