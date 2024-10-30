<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div uk-sticky="start: 200; animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent">
            <nav class="uk-navbar-container">
                <div class="uk-container uk-container-large">
                    <div uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-item uk-logo" href="#" aria-label="Back to Home">TSURUTA LABO</a>
                            <ul class="uk-navbar-nav uk-visible@m">
                                <li><a href="#">事業紹介</a></li>
                                <li><a href="#">施設概要</a></li>
                                <li><a href="#">利用者紹介</a></li>
                                <li><a href="#">ご利用方法</a></li>
                                <li><a href="#">お知らせ</a></li>
                                <li><a href="#">お問い合わせ</a></li>
                            </ul>
                        </div>
                        <div class="uk-navbar-right uk-visible@m">
                            <div class="uk-navbar-item">
                                <a href="#">
                                    <div class="uk-text-center">
                                        営業時間09:00〜18:00
                                        <div class="uk-navbar-subtitle uk-text-large">0173-26-5888</div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-navbar-item">
                                <a class="uk-button uk-button-default uk-border-rounded" href="">ご予約はこちらから</a>
                                <a class="uk-navbar-toggle" href="#modal-full" uk-search-icon uk-toggle></a>
                            </div>
                        </div>
                        <div class="uk-navbar-right">
                            <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas-nav" uk-toggle>
                                <span uk-navbar-toggle-icon></span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="modal-full" class="uk-modal-full uk-modal" uk-modal>
            <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
                <button class="uk-modal-close-full" type="button" uk-close></button>
                <form class="uk-search uk-search-large">
                    <input class="uk-search-input uk-text-center" type="search" placeholder="Search" aria-label="Search" autofocus>
                </form>
            </div>
        </div>
        <div id="offcanvas-nav" uk-offcanvas="mode: slide; overlay: true">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-default">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
    </header>



    <!-- Off-canvas menu (for small screens) -->
    <div id="offcanvas-nav" uk-offcanvas="mode: slide; overlay: true">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav uk-nav-default">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>