<?php
/*
Template Name: サテライトオフィスモニターツアー
*/
get_header();
?>

<main>
    <section class="uk-section" id="residence_header">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder uk-position-relative">
                <span>
                    <div class="uk-navbar-subtitle">- tour reservation -</div>サテライトオフィスモニターツアーのお申し込み
                </span>
            </h2>
            <div class="uk-margin-auto uk-width-fit uk-margin-large-bottom">
                <div class="uk-width-3-4@m uk-margin-auto">
                    <p>企業・団体所属の方は、企業・団体の名称やご住所、お電話番号もご入力ください。</p>
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

    <?php
    include get_template_directory() . '/components/cta.php';
    ?>
    <?php
    include get_template_directory() . '/components/banner.php';
    ?>
</main>
<?php get_footer(); ?>