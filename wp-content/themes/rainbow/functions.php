<?php
//Подключаем стили и скрипты
wp_enqueue_style('rainbow', get_template_directory_uri() . '/assets/css/rainbow.css');
wp_enqueue_script('rainbow', get_template_directory_uri() . '/assets/js/rainbow.js');

//Регистрируем меню
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widgets_init', 'register_my_widgets');


function theme_register_nav_menu()
{
    register_nav_menu('top', 'Меню в шапке');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'page'));
    add_theme_support('post-formats', array('post', 'page', 'gallery'));
    add_image_size('post-thumb', 520, 290, true);
}

function register_my_widgets()
{
    register_sidebar(array(
        'name' => 'left sidebar',
        'id' => "left_sidebar",
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>\n",
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => "</h2>\n",
        'before_sidebar' => '', // WP 5.6
        'after_sidebar' => '', // WP 5.6
    ));
}