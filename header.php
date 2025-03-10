<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h1><?php bloginfo('name'); ?></h1>
    <nav>
        <ul>
            <li><a href="<?php echo home('/');?>">Home</a></li>
            <li><a href="<?php echo home('/about/');?>">About Us</a></li>
            <li><a href="<?php echo home('/services/');?>">Services</a></li>
            <li><a href="<?php echo home('/contact/');?>">Contact</a></li>
        </ul>
    </nav>
</header>