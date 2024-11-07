<?php get_header(); ?>
<main>
    <section class="uk-section" id="hero">
        <div class="uk-container uk-container-large">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero_image.svg" alt="" class="uk-width-expand">
        </div>
    </section>

    <section class="uk-section uk-background-default" id="news">
        <div class="uk-container uk-container-small">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder">
                <span>
                    <div class="uk-navbar-subtitle">- news -</div>お知らせ
                </span>
            </h2>
            <?php
            $args = array(
                'posts_per_page' => 5,
                'post_status'    => 'publish',
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('uk-flex uk-flex-middle uk-margin-medium-bottom uk-border-dashed'); ?>>
                        <div class="uk-width-auto uk-margin-medium-right">
                            <p><?php echo get_the_date('Y.m.d'); ?></p>
                        </div>
                        <div class="uk-width-expand">
                            <p>
                                <a href="<?php the_permalink(); ?>" class="uk-link-reset">
                                    <?php the_title(); ?>
                                </a>
                            </p>
                        </div>
                    </article>
                <?php endwhile;
            else : ?>
                <p>記事がありません。</p>
            <?php endif;
            wp_reset_postdata();
            ?>
        </div>
        <div class="uk-align-center uk-text-center">
            <a class="uk-button uk-button-default uk-text-uppercase uk-border-rounded" href="<?php echo home_url("news"); ?>">read more</a>
        </div>
    </section>

    <section class="uk-section" id="about">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder">
                <span>
                    <div class="uk-navbar-subtitle">- about -</div>事業紹介
                </span>
            </h2>
            <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                <div class="uk-width-1-2 uk-width-expand@m uk-align-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about_image.svg" alt="">
                </div>
                <div class="uk-line-height uk-letter-spacing">
                    <p>鶴田町地域活性化支援センター（愛称：TSURUTA LABO）は、<span class="uk-text-lead">地域の活性化</span>と<span class="uk-text-lead">持続的な発展</span>を支援するため、新しい事業の創出をサポートし、地域産業およびコミュニティ活動の成長・振興に貢献することを目的としています。TSURUTA LABOは、廃校となった<span class="uk-text-lead">旧鶴田町立水元中央小学校</span>を活用し、貸オフィス、コワーキングスペース、イベントスペース、シェアショップなどを備えた<span class="uk-text-lead">多機能施設</span>として<span class="uk-text-lead">生まれ変わりました</span>。</p>
                    <div class="uk-text-center">
                        <a class="uk-button uk-button-default uk-text-uppercase uk-border-rounded" href="<?php echo home_url("about"); ?>">read more</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="uk-section uk-background-default" id="facility">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder">
                <span>
                    <div class="uk-navbar-subtitle">- facility -</div>施設概要
                </span>
            </h2>
            <div class="uk-align-center uk-width-fit uk-margin-large-bottom">
                <p class="uk-width-3-4@m uk-align-center">鶴田町地域活性化支援センター（愛称：TSURUTA LABO）は、旧鶴田町立水元中央小学校の建物をリノベーションし、多様な用途に対応できる複合施設として整備されています。
                    地域内外の利用者がビジネスやコミュニティ活動に活用できる環境を提供し、地域産業の振興と住民同士の交流を促進します。</p>
            </div>
            <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility_image01.svg" alt="" class="uk-width-1-2 uk-width-expand@m uk-align-center">
                    <p class="uk-text-center">貸オフィス</p>
                    <p class="uk-margin-remove-top">地域外の企業や事業者が、地域の拠点として業務を行える専用オフィススペースを提供。リモートワークや地方での事業拠点として利用可能です。</p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility_image02.svg" alt="" class="uk-width-1-2 uk-width-expand@m uk-align-center">
                    <p class="uk-text-center">コワーキングスペース</p>
                    <p class="uk-margin-remove-top">フリーランス、起業家、リモートワーカーが自由に利用できる共有オフィススペース。様々な分野の人々が集い、アイデアを共有し、コラボレーションを促進します。</p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility_image03.svg" alt="" class="uk-width-1-2 uk-width-expand@m uk-align-center">
                    <p class="uk-text-center">イベントスペース</p>
                    <p class="uk-margin-remove-top">セミナーやワークショップ、地域イベント、展示会など、様々な用途に対応可能な多目的スペース。地域住民や企業が自由に利用でき、交流や学びの場を提供します。</p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility_image04.svg" alt="" class="uk-width-1-2 uk-width-expand@m uk-align-center">
                    <p class="uk-text-center">シェアショップ</p>
                    <p class="uk-margin-remove-top">地元の特産品や手工芸品を販売・展示するスペース。地域のクリエイターや生産者が自分の商品を紹介し、販路を広げるためのプラットフォームとして利用できます。</p>
                </div>
            </div>
        </div>
        <div class="uk-align-center uk-text-center">
            <a class="uk-button uk-button-default uk-text-uppercase uk-border-rounded" href="<?php echo home_url("facility"); ?>">read more</a>
        </div>
    </section>

    <section class="uk-section" id="howtouse">
        <div class="uk-container uk-margin-large-bottom">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder">
                <span>
                    <div class="uk-navbar-subtitle">- how to use -</div>ご利用方法
                </span>
            </h2>
            <div class="uk-align-center uk-width-fit uk-align-center">
                <p>施設の利用方法や料金等はこちらから！利用予約や事前見学も承ります。</p>
            </div>
            <div class="uk-align-center uk-text-center">
                <a href="<?php echo home_url("howtouse"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/howtouse_button.svg" alt="" class="uk-width-auto"></a>
            </div>
        </div>
    </section>

    <section class="uk-section uk-background-default" id="residence">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder">
                <span>
                    <div class="uk-navbar-subtitle">- residence -</div>利用者紹介
                </span>
            </h2>
            <div class="uk-align-center uk-width-fit uk-align-center">
                <p class="uk-width-3-4@m uk-align-center">鶴田町地域活性化支援センター（愛称：TSURUTA LABO）では、様々な分野で活動する法人や個人が活動しています。それぞれが独自のビジネスや活動を展開し、地域と連携しながら新たな価値を創出しています。ここでは、現在入居している利用者をご紹介します。</p>
            </div>
            <div class="uk-grid uk-child-width-1-3@m uk-grid-small" uk-grid>
                <?php
                $custom_posts = new WP_Query(array(
                    'post_type' => 'add_residence',
                    'posts_per_page' => 3
                ));

                if ($custom_posts->have_posts()) :
                    while ($custom_posts->have_posts()) : $custom_posts->the_post();
                ?>
                        <div>
                            <div class="uk-margin-bottom">
                                <?php $image = get_field("custom_image");
                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/page_residence_header_noimage.png'); ?>" alt="Default Image" />
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if ($industry = get_field("custom_industry")) : ?>
                                    <span class="uk-label-default"><?php echo esc_html($industry); ?></span>
                                <?php endif; ?>
                                <?php if ($name = get_field("custom_name")) : ?>
                                    <p><?php echo esc_html($name); ?></p>
                                <?php endif; ?>
                                <?php if ($description = get_field("custom_description")) : ?>
                                    <p class="uk-margin-remove-top"><?php echo esc_html($description); ?></p>
                                <?php endif; ?>
                                <div class="uk-margin-small-bottom">
                                    <?php if ($twitter = get_field("custom_twitter")) : ?>
                                        <a href="<?php echo esc_url($twitter); ?>" uk-icon="icon: twitter"></a>
                                    <?php endif; ?>
                                    <?php if ($facebook = get_field("custom_facebook")) : ?>
                                        <a href="<?php echo esc_url($facebook); ?>" uk-icon="icon: facebook"></a>
                                    <?php endif; ?>
                                    <?php if ($instagram = get_field("custom_instagram")) : ?>
                                        <a href="<?php echo esc_url($instagram); ?>" uk-icon="icon: instagram"></a>
                                    <?php endif; ?>
                                </div>
                                <?php if ($google_map = get_field("custom_google_map")) : ?>
                                    <p><a href="<?php echo esc_url($google_map); ?>" class="uk-border-solid">Google Map</a></p>
                                <?php endif; ?>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>カスタム投稿が見つかりませんでした。</p>';
                endif;
                ?>
            </div>
        </div>
        <div class="uk-align-center uk-text-center">
            <a class="uk-button uk-button-default uk-text-uppercase uk-border-rounded" href="<?php echo home_url("residence"); ?>">read more</a>
        </div>
    </section>

    <?php
    include get_template_directory() . '/components/accessmap.php';

    if (function_exists('display_accessmap')) {
        display_accessmap();
    }
    ?>

</main>
<?php get_footer(); ?>