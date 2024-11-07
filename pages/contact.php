<?php
/*
Template Name: お問い合わせ
*/
get_header();
?>

<main>
    <section class="uk-section uk-page-header">
        <div class="uk-container">
            <?php
            include get_template_directory() . '/components/breadcrumb.php';
            if (function_exists('display_breadcrumb')) {
                display_breadcrumb();
            }
            ?>
        </div>
    </section>

    <section class="uk-section" id="residence_header">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder uk-position-relative">
                <span>
                    <div class="uk-navbar-subtitle">- contact -</div>お問い合わせ
                </span>
            </h2>
            <div class="uk-margin-auto uk-width-fit uk-margin-large-bottom">
                <div class="uk-width-3-4@m uk-margin-auto">
                    <p>施設やサービスのこと、施設見学のこと、料金や支払い方法のことなどお気軽にお問い合わせください。お問い合わせいただいた内容を確認し、3営業日以内にご返信いたします。</p>
                </div>
            </div>
            <?php the_content(); ?>
            <div class="uk-margin-top uk-text-center">
                <p>送信いただいた内容につきましては、3営業日以内にご返信いたします。</p>
                <div class="uk-flex uk-flex-middle uk-flex-center uk-flex-gap uk-flex-column uk-flex-row@m">
                    <p class="uk-margin-remove">営業時間09:00〜18:00</p>
                    <p class="uk-margin-remove uk-text-lead">0173-26-5888</p>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>