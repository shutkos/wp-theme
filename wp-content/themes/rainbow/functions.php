<?php


//Подключаем стили и скрипты
wp_enqueue_style('rainbow', get_template_directory_uri().'/assets/css/rainbow.css');
wp_enqueue_script('rainbow',get_template_directory_uri().'/assets/js/rainbow.js');

//Регистрируем меню
add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu(){
    register_nav_menu('top', 'Меню в шапке');
}