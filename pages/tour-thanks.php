<?php
/*
Template Name: サテライトオフィスツアー申し込みThanksページ
*/

// フォームページのURLを設定
$form_page_url = home_url('/satellite-office'); // 例: お問い合わせページのURL

// リファラーがフォームページでない場合、リダイレクト
if (!isset($_SERVER['HTTP_REFERER']) || strpos($_SERVER['HTTP_REFERER'], $form_page_url) === false) {
    wp_redirect(home_url()); // ホームページにリダイレクト
    exit;
}

get_header();
?>

<div class="uk-section uk-section-large uk-flex uk-flex-middle" style="min-height: 80vh;">
    <div class="uk-container uk-text-center">
        <h1 class="uk-heading-line uk-text-bolder"><span>送信が完了しました</span></h1>
        <p class="uk-text-lead uk-margin-large-top">ご応募ありがとうございました。</p>
        <p>令和7年1月9日（木）に参加の可否についてお知らせいたします。<br>
            なお、応募を辞退される場合は、お手数ですが下記アドレスまでお知らせください。</p>
        <p>akagi-m@plus-agc.com</p>
        <a href="<?php echo home_url(); ?>" class="uk-button uk-button-default uk-button-large uk-margin-top">ホームに戻る</a>
    </div>
</div>
<?php
include get_template_directory() . '/components/cta.php';
?>
<?php
include get_template_directory() . '/components/banner.php';
?>
<?php get_footer(); ?>