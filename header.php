<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div uk-sticky="start: 200; animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent" class="uk-header">
            <nav class="uk-navbar-container">
                <div class="uk-container uk-container-large">
                    <div uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-logo uk-width-expand" href="<?php echo home_url("/"); ?>" aria-label="Back to Home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="" class="uk-width-expand"></a>

                            <ul class="uk-navbar-nav uk-visible@m">
                                <li><a href="<?php echo home_url("about"); ?>">事業紹介</a></li>
                                <li><a href="<?php echo home_url("facility"); ?>">施設概要</a></li>
                                <li><a href="<?php echo home_url("residence"); ?>">利用者紹介</a></li>
                                <li><a href="<?php echo home_url("howtouse"); ?>">ご利用方法</a></li>
                                <li><a href="<?php echo home_url("news"); ?>">お知らせ</a></li>
                                <li><a href="<?php echo home_url("contact"); ?>">お問い合わせ</a></li>
                            </ul>
                        </div>
                        <div class="uk-navbar-right">
                            <a class="uk-navbar-toggle" href="#offcanvas-nav" uk-toggle>
                                <span uk-navbar-toggle-icon></span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="offcanvas-nav" uk-offcanvas="mode: slide; overlay: true">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-default uk-margin-bottom uk-hidden@m">
                    <li><a class="uk-text-white" href="<?php echo home_url("/"); ?>">ホーム</a></li>
                    <li><a class="uk-text-white" href="<?php echo home_url("about"); ?>">事業紹介</a></li>
                    <li><a class="uk-text-white" href="<?php echo home_url("facility"); ?>">施設概要</a></li>
                    <li><a class="uk-text-white" href="<?php echo home_url("residence"); ?>">利用者紹介</a></li>
                    <li><a class="uk-text-white" href="<?php echo home_url("howtouse"); ?>">ご利用方法</a></li>
                    <li><a class="uk-text-white" href="<?php echo home_url("news"); ?>">お知らせ</a></li>
                    <li><a class="uk-text-white" href="<?php echo home_url("contact"); ?>">お問い合わせ</a></li>
                </ul>
                <div>
                    <a class="uk-logo uk-width-expand uk-margin-bottom" href="<?php echo home_url("/"); ?>" aria-label="Back to Home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_w.svg" alt=""></a>
                    <div class="uk-margin-bottom uk-text-center">
                        <a href="#" uk-icon="icon: twitter"></a>
                        <a href="#" uk-icon="icon: facebook"></a>
                        <a href="#" uk-icon="icon: instagram"></a>
                    </div>
                    <div class="uk-text-center">
                        営業時間09:00〜18:00
                        <p class="uk-navbar-subtitle uk-text-large">0173-26-5888</p>
                    </div>
                    <a class="uk-width-expand uk-button uk-button-primary uk-border-rounded uk-margin-bottom" href="<?php echo home_url("reservation"); ?>">ご予約はこちらから</a>
                    <div>
                        <form class="uk-search uk-search-default">
                            <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </div>
    </header>