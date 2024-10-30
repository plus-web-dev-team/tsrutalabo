<?php

/* =============================================
CSS読み込み
============================================= */
function add_css()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap', array(), null);
    wp_enqueue_style('uikit', get_template_directory_uri() . '/css/uikit.min.css', "", '1.0.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', "", '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_js()
{
    wp_enqueue_script('uikit', get_template_directory_uri() . '/js/uikit.min.js', array('jquery'), false, true);
    wp_enqueue_script('uikit-icons', get_template_directory_uri() . '/js/uikit-icons.min.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'add_js');


/* =============================================
 フロントエンドのjQueryを無効化
============================================= */
function disable_jquery()
{
    if (!is_admin()) { // 管理画面では無効化しない
        wp_deregister_script('jquery'); // jQueryを解除
        wp_register_script('jquery', false); // jQueryを再登録しない
    }
}
add_action('wp_enqueue_scripts', 'disable_jquery');
