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

/* =============================================
 ページタイトル | サイトタイトル の形式に設定
============================================= */
function custom_wp_title($title)
{
    // サイト名を取得
    $site_name = get_bloginfo('name');

    // ページタイトルを取得
    if (is_single() || is_page()) {
        $page_title = single_post_title('', false);
    } elseif (is_category()) {
        $page_title = single_cat_title('', false);
    } elseif (is_tag()) {
        $page_title = single_tag_title('', false);
    } elseif (is_archive()) {
        $page_title = post_type_archive_title('', false);
    } elseif (is_search()) {
        $page_title = sprintf(__('Search Results for %s'), get_search_query());
    } elseif (is_404()) {
        $page_title = __('Page Not Found');
    } else {
        $page_title = get_the_title();
    }

    // タイトルを結合
    if ($page_title) {
        $title = $page_title . " | " . $site_name;
    } else {
        $title = $site_name;
    }

    return $title;
}
add_filter('pre_get_document_title', 'custom_wp_title');
add_theme_support('title-tag');

/* =============================================
 カスタム投稿
============================================= */
function add_custom_user_registration_meta_box()
{
    add_meta_box(
        'user_registration_meta_box', // メタボックスのID
        '利用者登録', // メタボックスのタイトル
        'display_user_registration_meta_box', // 表示するコールバック関数
        'add_residence', // 対象の投稿タイプ（カスタム投稿タイプ名に置き換えてください）
        'normal', // 表示する位置（normal, side, advanced など）
        'high' // 表示優先度（high, core, default, low など）
    );
}
add_action('add_meta_boxes', 'add_custom_user_registration_meta_box');

// メタボックスの内容を表示する関数
function display_user_registration_meta_box($post)
{
    $registration_value = get_post_meta($post->ID, 'user_registration', true);
?>
    <label for="user_registration">利用者登録内容:</label>
    <textarea name="user_registration" id="user_registration" rows="5" style="width:100%;"><?php echo esc_textarea($registration_value); ?></textarea>
<?php
}

// メタボックスのデータを保存する関数
function save_user_registration_meta_box_data($post_id)
{
    if (isset($_POST['user_registration'])) {
        update_post_meta($post_id, 'user_registration', sanitize_textarea_field($_POST['user_registration']));
    }
}
add_action('save_post', 'save_user_registration_meta_box_data');
