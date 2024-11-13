<section class="uk-section uk-section-primary" id="cta">
    <div class="uk-container uk-container-expand">
        <div class="uk-grid uk-child-width-1-3@m uk-grid-small uk-grid-match uk-text-white" uk-grid>
            <div class="uk-width-expand uk-flex uk-flex-top">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/cta_image01.png'); ?>" alt="" class="uk-width-1-2 uk-width-large@m">
            </div>
            <div class="uk-width-1-1@m uk-width-1-2@l">
                <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder">
                    <span>
                        <div class="uk-navbar-subtitle">- contact -</div>
                        お問い合わせ・ご予約はこちら！
                    </span>
                </h2>
                <div class="uk-align-center uk-text-center uk-text-large">
                    <p class="uk-margin-remove">営業時間09:00〜18:00</p>
                    <p class="uk-margin-remove uk-heading-medium">0173-26-5888</p>
                    <p class="uk-margin-remove">mottainai.research@gmail.com</p>
                </div>
                <div class="uk-grid uk-grid-medium uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                    <div class="uk-text-center uk-text-right@s">
                        <a href="<?php echo esc_url(home_url("contact")); ?>" class="uk-button uk-button-primary uk-button-large uk-border-rounded uk-text-bold">専用フォームからのお問い合わせ</a>
                    </div>
                    <div class="uk-text-center uk-text-left@s">
                        <a href="<?php echo esc_url(home_url("reservation")); ?>" class="uk-button uk-button-primary uk-button-large uk-border-rounded uk-text-bold">WEB予約はこちらから</a>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand uk-flex uk-flex-bottom uk-flex-right">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/cta_image02.png'); ?>" alt="" class="uk-width-1-2 uk-width-large@m">
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
            <?php
            $args = array(
                'post_type' => 'add_link_banner',
                'posts_per_page' => 6,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                echo '<!-- Posts found -->';
                while ($query->have_posts()) : $query->the_post();
                    $post_id = get_the_ID();

                    $banner_image = get_field('banner_image', $post_id);
                    $banner_link = get_field('banner_link', $post_id);

                    $banner_image_url = is_array($banner_image) ? $banner_image['url'] : $banner_image;
                    $banner_link_url = is_array($banner_link) ? $banner_link['url'] : $banner_link;
            ?>
                    <div>
                        <?php if ($banner_link_url) : ?>
                            <a href="<?php echo esc_url($banner_link_url); ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo esc_url($banner_image_url ?: get_template_directory_uri() . '/images/links_noimage.jpg'); ?>" alt="<?php the_title(); ?>" class="uk-width-expand">
                            </a>
                        <?php else : ?>
                            <img src="<?php echo esc_url($banner_image_url ?: get_template_directory_uri() . '/images/links_noimage.jpg'); ?>" alt="<?php the_title(); ?>" class="uk-width-expand">
                        <?php endif; ?>
                    </div>
            <?php endwhile;
            else :
                echo '<!-- No posts found in add_link_banner -->';
            endif;
            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>

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

<?php wp_footer(); ?>
</body>

</html>