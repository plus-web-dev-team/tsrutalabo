<?php
/*
Template Name: Thanksページ
*/

// フォームページのURLを設定
$form_page_url = home_url('/contact'); // 例: お問い合わせページのURL

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
        <p class="uk-text-lead uk-margin-large-top">お問い合わせいただき、誠にありがとうございます。</p>
        <p>担当者が確認次第、追ってご連絡いたします。</p>
        <a href="<?php echo home_url(); ?>" class="uk-button uk-button-default uk-button-large uk-margin-top">ホームに戻る</a>
    </div>
</div>

<?php get_footer(); ?>