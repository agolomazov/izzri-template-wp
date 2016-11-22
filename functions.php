<?php
/**
 *  Метод подключение стилей и скриптов к теме
 */
function loadStyleScript(){


    wp_enqueue_script('jquery_my', get_template_directory_uri().'/js/jquery-3.1.1.min.js', array(), '3.11.01');
    wp_enqueue_script('js_code', get_template_directory_uri().'/static/js/main7o8wi4ozpsez3b7f1or.min.js', array(), '3.11.01');
    wp_enqueue_style('my_styles', get_template_directory_uri().'/style.css', array(), '1.0.1');
    wp_enqueue_style('main_styles', get_template_directory_uri().'/static/css/main7o8wi4ozpsez3b7f1or.min.css', array(), '1.0.1');


}


// добавление функции для обработки действия загрузки страницы
add_action('wp_enqueue_scripts', 'loadStyleScript');

// позволяет устанавливать миниатюру посту
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 850 , 350); // устанавливает размер миниатюры поста по умолчанию


register_sidebar(array(
    'name'          => 'Верхнее меню',
    'id'            => 'menu_header',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
));

register_sidebar(array(
    'name'          => 'Копирайты для футера',
    'id'            => 'footer_copyrights',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
));