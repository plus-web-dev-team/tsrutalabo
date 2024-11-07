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
 ページタイトル | サイトタイトル の形式に設定
============================================= */
function custom_document_title_parts($title)
{
    if (is_home() || is_front_page()) {
        // ホームページまたはフロントページの場合はサイト名だけを表示
        $title['title'] = get_bloginfo('name');
    } elseif (is_single() || is_page()) {
        $title['title'] = single_post_title('', false);
    } elseif (is_category()) {
        $title['title'] = single_cat_title('', false);
    } elseif (is_tag()) {
        $title['title'] = single_tag_title('', false);
    } elseif (is_archive()) {
        $title['title'] = post_type_archive_title('', false);
    } elseif (is_search()) {
        $title['title'] = sprintf(__('Search Results for %s'), get_search_query());
    } elseif (is_404()) {
        $title['title'] = __('Page Not Found');
    }

    return $title;
}
add_filter('document_title_parts', 'custom_document_title_parts');
add_theme_support('title-tag');


/* =============================================
 カスタムフィールドを有効化
============================================= */
function my_acf_init()
{
    if (function_exists('acf_update_setting')) {
        acf_update_setting('remove_wp_meta_box', false);
    }
}
add_action('acf/init', 'my_acf_init');


/* =============================================
 送信完了画面へリダイレクト
============================================= */
function add_contact_form7_redirect_script()
{
?>
    <script>
        document.addEventListener('wpcf7mailsent', function(event) {
            location.href = '<?php echo home_url('/thanks'); ?>';
        }, false);
    </script>
<?php
}
add_action('wp_footer', 'add_contact_form7_redirect_script');
