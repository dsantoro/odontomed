<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="content">

    <header class="site-header">

        <div class="row flex">

            <div class="small-12 medium-10 large-3 columns">

                <a href="<?php echo home_url(); ?>" class="logo" title="<?php bloginfo('name'); ?>">

                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo.png"/>
                </a>
            </div>

            <div class="large-9 show-for-large columns">

                <nav class="site-navigation">

                    <?php

                        $args = array(
                            'theme_location' => 'primary'
                        );
                    ?>

                    <?php wp_nav_menu( $args ); ?>
                </nav>
            </div>
        </div>
    </header>

    <section class="banner" role="banner">

        <div class="carousel">

            <div>

                <div class="each-banner" style="background-image: url(<?php echo get_bloginfo('template_url') ?>/assets/images/banner-1.jpg)"></div>
            </div>

            <div>

                <div class="each-banner" style="background-image: url(<?php echo get_bloginfo('template_url') ?>/assets/images/banner-1.jpg)"></div>
            </div>
        </div>

        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/banner-mask.png" alt="" class="banner-mask">
    </section>