<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class = 'main__header'>
    <a href="<?php echo home_url('/');?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" class = 'logo__image' alt="logo.png"></a>
    <nav class = 'nav__container'>
        <ul class = 'ul__nav__container'>
            <li><a href="<?php echo home_url('/');?>">Главная</a></li>
            <li><a href="<?php echo home_url('/about/');?>">Продукты</a></li>
            <li><a href="<?php echo home_url('/services/');?>">R&D</a></li>
            <li><a href="<?php echo home_url('/contact/');?>">Поддержка</a></li>
            <div class="profile__container">
                <div class="lang__container">
                    <ul class="ul__lang__container">
                        <li><span lang = 'ru'>РУ</span></li>
                        <li><span lang = 'kk'>КЗ</span></li>
                    </ul>
                </div>
                <button lang = 'ru' class="profile__button">Войти</button>
            </div>
        </ul>
    </nav>
</header>