<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MQQR6GZB');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N262MB1ZH9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-N262MB1ZH9');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- OGP meta tags -->
    <meta property="og:title" content="TSURUTA LABO - 鶴田町地域活性化支援センター" />
    <meta property="og:description"
        content="青森県鶴田町にある地域活性化支援センター。旧水元中央小学校をリノベーションし、貸オフィス、コワーキングスペース、イベントスペース、シェアショップを展開。地域の活性化と持続的発展を支援します。" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://tsurutalabo.com/" />
    <meta property="og:image" content="https://tsurutalabo.com/wp-content/uploads/2024/11/ogpimage.jpg" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="og:site_name" content="TSURUTA LABO" />

    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="TSURUTA LABO - 鶴田町地域活性化支援センター" />
    <meta name="twitter:description"
        content="青森県鶴田町にある地域活性化支援センター。旧水元中央小学校をリノベーションし、貸オフィス、コワーキングスペース、イベントスペース、シェアショップを展開。地域の活性化と持続的発展を支援します。" />
    <meta name="twitter:image" content="https://tsurutalabo.com/wp-content/uploads/2024/11/ogpimage.jpg" />
    <?php wp_head(); ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQQR6GZB"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="top"></div>
    <header>
        <div uk-sticky="start: 200; animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent"
            class="uk-header">
            <nav class="uk-navbar-container">
                <div class="uk-container uk-container-large">
                    <div uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-logo uk-width-expand" href="<?php echo home_url("/"); ?>"
                                aria-label="Back to Home">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/images/logo.svg"
                                    alt="トップページに戻る" class="uk-width-expand uk-block">
                            </a>
                            <ul class="uk-navbar-nav uk-visible@m">
                                <li><a href="<?php echo home_url("about"); ?>">事業紹介</a></li>
                                <li><a href="<?php echo home_url("facility"); ?>">施設概要</a></li>
                                <li><a href="<?php echo home_url("residence"); ?>">利用者紹介</a></li>
                                <li><a href="<?php echo home_url("howtouse"); ?>">ご利用方法（予約）</a></li>
                                <li><a href="<?php echo home_url("news"); ?>">お知らせ</a></li>
                                <li class="uk-margin-right"><a href="<?php echo home_url("contact"); ?>">お問い合わせ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="uk-navbar-right">
                            <div class="uk-navbar-item uk-visibles@m">
                                <div class="uk-text-center">
                                    営業時間09:00〜18:00
                                    <div class="uk-navbar-subtitle uk-text-large">0173-26-5888</div>
                                </div>
                                <a class="uk-button uk-button-default uk-border-rounded uk-margin-small-right uk-margin-small-left"
                                    href="https://yoyaku.tsurutalabo.com/login"
                                    target="_blank"
                                    rel="noopener noreferrer">会員登録・ログイン</a>
                                <a class="uk-navbar-toggle" href="#modal-full" uk-search-icon uk-toggle></a>
                            </div>
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

                <form class="uk-search uk-search-large" action="<?php echo home_url('/'); ?>" method="get">
                    <input class="uk-search-input uk-text-center" type="search" name="s" placeholder="Search"
                        aria-label="Search" autofocus>
                    <button type="submit" uk-search-icon></button>
                </form>
            </div>
        </div>
        <div id="offcanvas-nav" uk-offcanvas="mode: slide; overlay: true">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-default uk-margin-bottom uk-hidden@m">
                    <li><a class="uk-text-white" href="<?php echo home_url("/"); ?>">ホーム</a></li>
                    <li><a class="uk-text-white" href="<?php echo home_url("about"); ?>">事業紹介</a></li>
                    <li><a class="uk-text-white" href="<?php echo home_url("facility"); ?>">施設概要</a></li>
                    <li><a class="uk-text-white" href="<?php echo home_url("residence"); ?>">利用者紹介</a></li>
                    <li><a class="uk-text-white" href="<?php echo home_url("howtouse"); ?>">ご利用方法（予約）</a></li>
                    <li><a class="uk-text-white" href="<?php echo home_url("news"); ?>">お知らせ</a></li>
                    <li><a class="uk-text-white" href="<?php echo home_url("contact"); ?>">お問い合わせ</a></li>
                </ul>
                <div>
                    <a class="uk-logo uk-width-expand uk-margin-bottom" href="<?php echo home_url("/"); ?>"
                        aria-label="Back to Home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_w.svg"
                            alt="トップページに戻る"></a>
                    <div class="uk-margin-bottom uk-text-center">
                        <a href="https://www.instagram.com/mottainai.research" uk-icon="icon: instagram" target="_blank"
                            rel="noopener noreferrer"></a>
                    </div>
                    <div class="uk-text-center">
                        営業時間09:00〜18:00
                        <p class="uk-navbar-subtitle uk-text-large">0173-26-5888</p>
                    </div>
                    <a class="uk-width-expand uk-button uk-button-primary uk-border-rounded uk-margin-bottom"
                        href="https://yoyaku.tsurutalabo.com/login"
                        target="_blank"
                        rel="noopener noreferrer">会員登録・ログイン</a>
                    <div>
                        <form role="search" method="get" class="uk-search uk-search-default"
                            action="<?php echo home_url('/'); ?>">
                            <input type="search" class="uk-search-input uk-input" placeholder="検索..."
                                value="<?php echo get_search_query(); ?>" name="s" title="Search" />
                            <button type="submit" class="uk-search-icon-flip" uk-search-icon></button>
                        </form>
                    </div>
                </div>
            </div>
    </header>