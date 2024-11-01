<section class="uk-section uk-section-primary" id="cta">
    <div class="uk-container uk-container-expand">
        <div class="uk-grid uk-child-width-1-3@m uk-grid-small uk-grid-match uk-text-white" uk-grid>
            <div class="uk-width-expand uk-flex uk-flex-top">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cta_image01.png" alt="" class="uk-width-large">
            </div>
            <div class="uk-width-1-2@m">
                <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder">
                    <span>
                        <div class="uk-navbar-subtitle">- contact -</div>
                        お問い合わせ・ご予約はこちら！
                    </span>
                </h2>
                <p class="uk-text-center">
                    ビジネスやコミュニティ活動の拠点として、どなたでもご利用いただけます。<br>
                    まずはお気軽にお問い合わせください！<br>
                    地域の活性化に向けた第一歩を、このセンターから始めませんか？
                </p>
                <div class="uk-align-center uk-text-center uk-text-large">
                    <p class="uk-margin-remove">営業時間09:00〜18:00</p>
                    <p class="uk-margin-remove uk-heading-medium">0173-26-5888</p>
                </div>
                <div class="uk-flex uk-width-fit uk-align-center">
                    <div class="uk-margin-right">
                        <a href="<?php echo home_url("contact"); ?>" class="uk-button uk-button-primary uk-button-large uk-border-rounded">メールでのお問い合わせ</a>
                    </div>
                    <div class="uk-margin-left">
                        <a href="<?php echo home_url("reservation"); ?>" class="uk-button uk-button-primary uk-button-large uk-border-rounded">ご予約の方はこちらから</a>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand uk-flex uk-flex-bottom uk-flex-right">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cta_image02.png" alt="" class="uk-width-large">
            </div>
        </div>
    </div>
</section>

<section class="uk-section uk-background-default" id="links">
    <div class="uk-container">
        <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder">
            LINKS
        </h2>
        <div class="uk-grid uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/links_image01.jpg" alt="" class="uk-width-expand"></a>
            </div>
            <div>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/links_image02.jpg" alt="" class="uk-width-expand"></a>
            </div>
            <div>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/links_noimage.jpg" alt="" class="uk-width-expand"></a>
            </div>
            <div>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/links_noimage.jpg" alt="" class="uk-width-expand"></a>
            </div>
            <div>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/links_noimage.jpg" alt="" class="uk-width-expand"></a>
            </div>
            <div>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/links_noimage.jpg" alt="" class="uk-width-expand"></a>
            </div>
        </div>
    </div>
</section>

<section class="uk-section uk-padding-remove-bottom" id="footnav">
    <div class="uk-container uk-container-large">
        <div class="uk-flex uk-flex-around uk-flex-middle uk-width-1-1 uk-flex-column uk-flex-row@s">
            <div class="uk-flex uk-flex-column uk-flex-row@m uk-flex-middle">
                <div class="uk-logo uk-margin-right uk-margin-small-bottom">
                    <a href="<?php echo home_url("/"); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
                    </a>
                </div>
                <div class="uk-margin-small-bottom">
                    <a href="" uk-icon="icon: twitter"></a>
                    <a href="" uk-icon="icon: facebook"></a>
                    <a href="" uk-icon="icon: instagram"></a>
                </div>
            </div>
            <div class="uk-flex uk-flex-column uk-flex-row@m uk-flex-middle">
                <a href="#" class="uk-margin-right">
                    <div class="uk-text-center">
                        営業時間09:00〜18:00
                        <div class="uk-navbar-subtitle uk-text-large">0173-26-5888</div>
                    </div>
                </a>
                <a class="uk-button uk-button-default uk-border-rounded" href="<?php echo home_url("reservation"); ?>">ご予約はこちらから</a>
            </div>
        </div>
        <hr>
        <!-- リストを中央に揃える -->
        <div class="uk-flex uk-flex-center uk-margin-top">
            <ul class="uk-nav uk-grid uk-grid-large uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-auto@m">
                <li><a href="<?php echo home_url("/"); ?>">ホーム</a></li>
                <li><a href="<?php echo home_url("about"); ?>">事業紹介</a></li>
                <li><a href="<?php echo home_url("facility"); ?>">施設概要</a></li>
                <li><a href="<?php echo home_url("residence"); ?>">利用者紹介</a></li>
                <li><a href="<?php echo home_url("howtouse"); ?>">ご利用方法</a></li>
                <li><a href="<?php echo home_url("news"); ?>">お知らせ</a></li>
                <li><a href="<?php echo home_url("contact"); ?>">お問い合わせ</a></li>
            </ul>
        </div>
    </div>
    <div class="uk-background-primary uk-margin-large-top uk-text-white">
        <div class="uk-container">
            <div class="uk-flex uk-flex-middle uk-flex-around uk-text-small uk-padding-small uk-flex-column uk-flex-row@s">
                <p class="uk-margin-remove">
                    <a href="<?php echo home_url("privacy"); ?>" class="uk-text-white">個人情報保護方針</a>
                </p>
                <p class="uk-margin-remove">© TSURUTA LABO. All Rights reservationd.</p>
            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>
</body>

</html>