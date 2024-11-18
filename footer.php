<footer>
    <section class="uk-section uk-padding-remove-bottom" id="footnav">
        <div class="uk-container uk-container-large">
            <div class="uk-flex uk-flex-around uk-flex-middle uk-width-1-1 uk-flex-column uk-flex-row@s">
                <div class="uk-flex uk-flex-column uk-flex-row@m uk-flex-middle">
                    <div class="uk-logo uk-width-medium uk-margin-right uk-margin-small-bottom">
                        <a href="<?php echo esc_url(home_url("/")); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.svg'); ?>" alt="" width="uk-width-expand">
                        </a>
                    </div>
                    <div class="uk-margin-small-bottom">
                        <a href="https://www.instagram.com/mottainai.research" uk-icon="icon: instagram" target="_blank" rel="noopener noreferrer"></a>
                    </div>
                </div>
                <div class="uk-flex uk-flex-column uk-flex-row@m uk-flex-middle">
                    <a href="#" class="uk-margin-right">
                        <div class="uk-text-center">
                            営業時間09:00〜18:00
                            <div class="uk-navbar-subtitle uk-text-large">0173-26-5888</div>
                        </div>
                    </a>
                    <a class="uk-button uk-button-default uk-border-rounded" href="<?php echo esc_url(home_url("reservation")); ?>">WEB予約はこちらから</a>
                </div>
            </div>
            <hr>
            <div class="uk-flex uk-flex-center uk-margin-top">
                <ul class="uk-nav uk-grid uk-grid-large uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-auto@m">
                    <li><a href="<?php echo esc_url(home_url("/")); ?>">ホーム</a></li>
                    <li><a href="<?php echo esc_url(home_url("about")); ?>">事業紹介</a></li>
                    <li><a href="<?php echo esc_url(home_url("facility")); ?>">施設概要</a></li>
                    <li><a href="<?php echo esc_url(home_url("residence")); ?>">利用者紹介</a></li>
                    <li><a href="<?php echo esc_url(home_url("howtouse")); ?>">ご利用方法</a></li>
                    <li><a href="<?php echo esc_url(home_url("news")); ?>">お知らせ</a></li>
                    <li><a href="<?php echo esc_url(home_url("contact")); ?>">お問い合わせ</a></li>
                </ul>
            </div>
        </div>
        <div class="uk-background-primary uk-margin-large-top uk-text-white">
            <div class="uk-container">
                <div class="uk-flex uk-flex-middle uk-flex-around uk-text-small uk-padding-small uk-flex-column uk-flex-row@s">
                    <p class="uk-margin-remove">
                        <a href="<?php echo esc_url(home_url("privacy")); ?>" class="uk-text-white">プライバシーポリシー</a>
                    </p>
                    <p class="uk-margin-remove">© TSURUTA LABO. All Rights reserved.</p>
                </div>
            </div>
        </div>
        <a href="#top" id="back-to-top" uk-totop uk-scroll></a>
    </section>
</footer>

<?php wp_footer(); ?>
</body>

</html>