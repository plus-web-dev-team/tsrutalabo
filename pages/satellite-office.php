<?php
/*
Template Name: サテライトオフィスモニターツアーフォーム
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
                    <ul class="uk-list">
                        <li>〇実施日程：2025年2月8日（土）・2月9日（日）</li>
                        <li>〇申込期限：2025年1月8日（水）</li>
                        <li>※チラシ・ポスターには「定員に達し次第締め切り」とありますが、申込期限まで申込を受付いたします。</li>
                        <li class="uk-margin-remove">※申込者多数の場合、抽選となります。</li>
                        <li class="uk-margin-remove">※2025年1月10日（金）を目途に、メールにて参加決定/不決定のお知らせをいたします。</li>
                        <li class="uk-margin-remove">※企業・団体所属の方は、企業・団体の名称やご住所、電話番号もご入力ください。</li>
                    </ul>
                </div>
            </div>
            <?php the_content(); ?>
            <div class="uk-margin-top uk-text-center">
                <div class="uk-flex uk-flex-middle uk-flex-center uk-flex-gap uk-flex-column uk-flex-row@m">
                    <p class="uk-margin-remove">対応時間 平日09:00〜17:00</p>
                    <p class="uk-margin-remove uk-text-lead">0173-26-7071</p>
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