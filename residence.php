<?php
/*
Template Name: 利用者紹介
*/
?>

<?php get_header(); ?>
<main>
    <section class="uk-section uk-page-header">
        <div class="uk-container">
            <?php
            include get_template_directory() . '/breadcrumb.php';
            if (function_exists('display_breadcrumb')) {
                display_breadcrumb();
            }
            ?>
        </div>
    </section>

    <section class="uk-section" id="residence_header">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder uk-position-relative">
                <span>
                    <div class="uk-navbar-subtitle">- member of a cool crew -</div>多彩な分野で活躍する貸オフィス利用者の皆さま
                </span>
            </h2>
            <div class="uk-margin-auto uk-width-fit uk-margin-large-bottom">
                <div class="uk-width-3-4@m uk-margin-auto">
                    <p>TSURUTA LABOでは、様々な分野で活躍する法人や個人、クリエイターが集い、活動しています。<br>ここでは、現在利用している個性豊かな皆さまをご紹介します。</p>
                </div>
            </div>
            <!-- <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-small" uk-grid>
                <div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/page_residence_header_image01.png" alt="" class="uk-width-expand"></div>
                    <div>
                        <span class="uk-label-default">業種が入ります</span>
                        <p>ミライク</p>
                        <p class="uk-margin-remove-top">説明が入ります</p>
                        <div class="uk-margin-small-bottom">
                            <a href="" uk-icon="icon: twitter"></a>
                            <a href="" uk-icon="icon: facebook"></a>
                            <a href="" uk-icon="icon: instagram"></a>
                        </div>
                        <p><a href="" class="uk-border-solid">Google Map</a></p>
                    </div>
                </div>
                <div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/page_residence_header_image02.png" alt="" class="uk-width-expand"></div>
                    <div>
                        <span class="uk-label-default">つまみ細工作家</span>
                        <p>NATSUKO MIYAKOSHI</p>
                        <p class="uk-margin-remove-top">NATSUKO MIYAKOSHIは、着物を素材に、日本の伝統技術「つまみ細工」の技法を作ってお作りするアクセサリーやアートピース「SOUZOUKA」や青森の伝統工芸品「こぎん刺し」の模様を使用した卓上ランプ「光るこぎん」など日本の伝統技術を活用したモダンな商品、作品を製作しています。</p>
                        <div class="uk-margin-small-bottom">
                            <a href="" uk-icon="icon: twitter"></a>
                            <a href="" uk-icon="icon: facebook"></a>
                            <a href="" uk-icon="icon: instagram"></a>
                        </div>
                        <p><a href="" class="uk-border-solid">Google Map</a></p>
                    </div>
                </div>
                <div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/page_residence_header_noimage.png" alt="" class="uk-width-expand"></div>
                    <div>
                        <span class="uk-label-default">つまみ細工作家</span>
                        <p>イベントスペース</p>
                        <p class="uk-margin-remove-top">セミナーやワークショップ、地域イベント、展示会など、様々な用途に対応可能な多目的スペース。地域住民や企業が自由に利用でき、交流や学びの場を提供します。</p>
                        <div class="uk-margin-small-bottom">
                            <a href="" uk-icon="icon: twitter"></a>
                            <a href="" uk-icon="icon: facebook"></a>
                            <a href="" uk-icon="icon: instagram"></a>
                        </div>
                        <p><a href="" class="uk-border-solid">Google Map</a></p>
                    </div>
                </div>
                <div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/page_residence_header_noimage.png" alt="" class="uk-width-expand"></div>
                    <div>
                        <span class="uk-label-default">つまみ細工作家</span>
                        <p>シェアショップ</p>
                        <p class="uk-margin-remove-top">地元の特産品や手工芸品を販売・展示するスペース。地域のクリエイターや生産者が自分の商品を紹介し、販路を広げるためのプラットフォームとして利用できます。</p>
                        <div class="uk-margin-small-bottom">
                            <a href="" uk-icon="icon: twitter"></a>
                            <a href="" uk-icon="icon: facebook"></a>
                            <a href="" uk-icon="icon: instagram"></a>
                        </div>
                        <p><a href="" class="uk-border-solid">Google Map</a></p>
                    </div>
                </div>
            </div> -->
            <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-small" uk-grid>
                <?php
                // カスタム投稿タイプのループ
                $custom_posts = new WP_Query(array(
                    'post_type' => 'add_residence', // カスタム投稿のスラッグに置き換え
                    'posts_per_page' => -1
                ));

                if ($custom_posts->have_posts()) :
                    while ($custom_posts->have_posts()) : $custom_posts->the_post();

                        // ACF のリピーターフィールドを確認
                        if (have_rows('your_repeater_field')) :
                            while (have_rows('your_repeater_field')) : the_row();
                ?>
                                <div>
                                    <div>
                                        <!-- カスタム画像フィールドを表示 -->
                                        <img src="<?php the_sub_field('custom_image'); ?>" alt="" class="uk-width-expand">
                                    </div>
                                    <div>
                                        <span class="uk-label-default"><?php the_sub_field('custom_industry'); ?></span>
                                        <p><?php the_sub_field('custom_name'); ?></p>
                                        <p class="uk-margin-remove-top"><?php the_sub_field('custom_description'); ?></p>
                                        <div class="uk-margin-small-bottom">
                                            <?php if (get_sub_field('custom_twitter')) : ?>
                                                <a href="<?php the_sub_field('custom_twitter'); ?>" uk-icon="icon: twitter"></a>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('custom_facebook')) : ?>
                                                <a href="<?php the_sub_field('custom_facebook'); ?>" uk-icon="icon: facebook"></a>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('custom_instagram')) : ?>
                                                <a href="<?php the_sub_field('custom_instagram'); ?>" uk-icon="icon: instagram"></a>
                                            <?php endif; ?>
                                        </div>
                                        <?php if (get_sub_field('custom_google_map')) : ?>
                                            <p><a href="<?php the_sub_field('custom_google_map'); ?>" class="uk-border-solid">Google Map</a></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                <?php
                            endwhile;
                        endif;

                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <section class="uk-section uk-background-default" id="facility_main">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder uk-position-relative">
                <span>
                    <div class="uk-navbar-subtitle">- historical and modern -</div>木の温かみを感じるモダンな空間
                </span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/page_facility_main_image01.svg" alt="" class="uk-position-top-right">
            </h2>
            <div class="uk-margin-auto uk-width-fit uk-margin-large-bottom">
                <div class="uk-width-3-4@m uk-margin-auto">
                    旧鶴田町立水元中央小学校は、かつて地域の子どもたちが学びの場として親しんだ歴史的な建物です。その建物が、地域活性化支援センターとして新たな命を吹き込まれました。施設は、昔ながらの温かみある木造校舎の趣を残しつつ、現代的な機能性を兼ね備えた設備に生まれ変わり、「歴史とモダンが融合した空間」を提供しています。
                </div>
            </div>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

                <div class="uk-slider-items uk-grid">
                    <div class="uk-width-1-3">
                        <div class="uk-panel">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/page_facility_main_image02.png" alt="" class="uk-width-expand uk-margin-bottom">
                            <div>
                                <h3 class="uk-text-primary">スマートロック常設。24時間入退出可能なオフィス！</h3>
                                <p>木のぬくもりを感じる70㎡の広々としたスペースで、一般的なオフィスワークのみならず、アーティストさんのアトリエや店舗利用など使い方は無限大。
                                    複合施設でありながら事業者のお仕事の形にあわせて自由に利用可能。
                                    窓から一面の田んぼや岩木山を眺め、四季を感じながら最高のロケーションで仕事ができます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3">
                        <div class="uk-panel">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/page_facility_main_image03.png" alt="" class="uk-width-expand uk-margin-bottom">
                            <div>
                                <h3 class="uk-text-primary">１時間からの利用もOK！集中して作業をしたい方のワークスペース</h3>
                                <p>スマートロック、Wi-Fi、電源、コピー機、個室（1ヵ所）完備。１時間～のドロップインも、月単位での契約も可能です。
                                    打合せや会議をしたい場合は個室も利用可能。
                                    リモートワークや、帰省時のちょっとしたお仕事などにもお気軽にご利用ください！</p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3">
                        <div class="uk-panel">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/page_facility_main_image04.png" alt="" class="uk-width-expand uk-margin-bottom">
                            <div>
                                <h3 class="uk-text-primary">元小学校を活かした、個性あふれるイベントスペース</h3>
                                <p>シンクがたくさんある元理科室（イベントスペース１）、電源がたくさんある元図工室（イベントスペース２）、調理可能な元家庭科室、広々空間の元コンピューター室、ちょっとした防音の元音楽室、18畳の元茶道室など、使いたい用途にあわせた機能が備わった多様なイベントスペースです。
                                    半日、１日単位で利用可能です！</p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3">
                        <div class="uk-panel">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/page_facility_main_image05.png" alt="" class="uk-width-expand uk-margin-bottom">
                            <div>
                                <h3 class="uk-text-primary">１日～利用可能！催事や販売等のチャレンジ専用空間</h3>
                                <p>4m×4m。小学校で校長先生が使っていた演台をレジカウンターに利用可能です。
                                    レジ（エアレジ・有料）を貸し出しできますので、
                                    自身でキャッシュレス会計手段を持っていない方でもキャッシュレス決済を導入することができ、お客様への利便性を高められます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3">
                        <div class="uk-panel">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/page_facility_main_image06.png" alt="" class="uk-width-expand uk-margin-bottom">
                            <div>
                                <h3 class="uk-text-primary">廃校とは思えない綺麗な体育館とグラウンド</h3>
                                <p>スポーツはもちろん、演劇、ダンス、大規模イベントなど使い方は無限大！
                                    １時間～利用可能なので、コワーキング等を利用した際の仕事の息抜きや健康維持にもぜひご利用ください。
                                    体育館は更衣室・トイレ完備。スマートロックでの管理により、夜の時間帯も利用できます！</p>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>
        </div>
    </section>

    <?php
    include get_template_directory() . '/accessmap.php';

    if (function_exists('display_accessmap')) {
        display_accessmap();
    }
    ?>

</main>
<?php get_footer(); ?>