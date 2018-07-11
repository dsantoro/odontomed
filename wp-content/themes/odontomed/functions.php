<?php

    /*
        Função que faz o carregamento dos recursos (resources) do tema
    */
    function odontomed_resources() {

        wp_enqueue_style('foundation', get_template_directory_uri() . '/assets/css/foundation.min.css', false, '1.1', 'all');
        wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', false, '1.1', 'all');
        wp_enqueue_style('css-slider', get_template_directory_uri() . '/assets/css/slick.css', false, '1.1', 'all');
        wp_enqueue_style('css-slider-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', false, '1.1', 'all');
        wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.min.css', false, '1.1', 'all');

        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '2.2', true);

        wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.8', true);

        wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array(), '1.1', true);
    }

    /*
        Chamada da função que faz o carregamento dos recursos (resources) do tema
    */
    add_action('wp_enqueue_scripts', 'odontomed_resources');


    /*

        Registros de Menu
    */
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    ));