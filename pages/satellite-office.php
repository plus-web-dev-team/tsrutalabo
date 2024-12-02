<?php
/*
Template Name: サテライトオフィスモニターツアーLP
*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- OGP meta tags -->
    <meta property="og:title" content="TSURUTA LABO - 鶴田町地域活性化支援センター" />
    <meta property="og:description" content="青森県鶴田町にある地域活性化支援センター。旧水元中央小学校をリノベーションし、貸オフィス、コワーキングスペース、イベントスペース、シェアショップを展開。地域の活性化と持続的発展を支援します。" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://tsurutalabo.com/" />
    <meta property="og:image" content="https://tsurutalabo.com/wp-content/uploads/2024/11/ogpimage.jpg" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="og:site_name" content="TSURUTA LABO" />

    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="TSURUTA LABO - 鶴田町地域活性化支援センター" />
    <meta name="twitter:description" content="青森県鶴田町にある地域活性化支援センター。旧水元中央小学校をリノベーションし、貸オフィス、コワーキングスペース、イベントスペース、シェアショップを展開。地域の活性化と持続的発展を支援します。" />
    <meta name="twitter:image" content="https://tsurutalabo.com/wp-content/uploads/2024/11/ogpimage.jpg" />

    <link rel="stylesheet" id="uikit-css" href="https://tsurutalabo.com/wp-content/themes/tsurutalabo/css/uikit.min.css?ver=1.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="main-css" href="https://tsurutalabo.com/wp-content/themes/tsurutalabo/css/main.css?ver=1.0.0" type="text/css" media="all">
</head>

<main>
    <section class="uk-section" id="residence_header">
        <div class="uk-container">
            <div>
                <img src="https://tsurutalabo.com/wp-content/uploads/2024/12/header-img.jpg" alt="">
            </div>
            <div class="uk-margin-auto uk-width-fit uk-margin-large-bottom">

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