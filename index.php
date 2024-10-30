<?php get_header(); ?>
<main>
    <section class="uk-section" id="hero">
        <div class="uk-container uk-container-large">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero_image.svg" alt="" class="uk-width-expand">
        </div>
    </section>

    <section class="uk-section uk-background-default" id="news">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bold">
                <span>
                    <div class="uk-navbar-subtitle">- news -</div>お知らせ
                </span>
            </h2>

            <?php
            // 最新記事を5件取得するクエリ
            $args = array(
                'posts_per_page' => 5,  // 記事を5件取得
                'post_status'    => 'publish', // 公開状態の記事のみ
            );
            $query = new WP_Query($args);

            // 記事が存在する場合のループ処理
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('uk-flex uk-flex-middle uk-margin-medium-bottom uk-border-dashed'); ?>>
                        <!-- 日付部分 -->
                        <div class="uk-width-auto uk-margin-medium-right">
                            <p><?php echo get_the_date('Y.m.d'); ?></p>
                        </div>

                        <!-- タイトル部分 -->
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

            wp_reset_postdata(); // グローバル変数のリセット
            ?>
        </div>
        <div class="uk-align-center uk-text-center">
            <a class="uk-button uk-button-primary uk-text-uppercase uk-border-rounded" href="">read more</a>
        </div>
    </section>

    <section class="uk-section" id="about">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bold">
                <span>
                    <div class="uk-navbar-subtitle">- about -</div>事業紹介
                </span>
            </h2>
            <div uk-grid>
                <div class="uk-width-expand">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about_image.svg" alt="" class="uk-width-expand">
                </div>
                <div class="uk-width-3-5 uk-line-height uk-letter-spacing">
                    <p>地域活性化支援センターは、<span class="uk-text-lead">地域の活性化</span>と<span class="uk-text-lead">持続的な発展</span>を支援するため、新しい事業の創出をサポートし、地域産業およびコミュニティ活動の成長・振興に貢献することを目的としています。本センターは、廃校となった<span class="uk-text-lead">旧鶴田町立水元中央小学校</span>を活用し、貸オフィス、コワーキングスペース、イベントスペース、シェアショップなどを備えた<span class="uk-text-lead">多機能施設</span>として<span class="uk-text-lead">生まれ変わります</span>。</p>
                    <div class="uk-align-center uk-text-left">
                        <a class="uk-button uk-button-primary uk-text-uppercase uk-border-rounded" href="">read more</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="uk-section uk-background-default" id="facility">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bold">
                <span>
                    <div class="uk-navbar-subtitle">- facility -</div>施設概要
                </span>
            </h2>
            <div class="uk-align-center uk-width-fit uk-align-center">
                <p>地域活性化支援センターは、旧鶴田町立水元中央小学校の建物をリノベーションし、<br>多様な用途に対応できる複合施設として整備されています。<br>
                    地域内外の利用者がビジネスやコミュニティ活動に活用できる環境を提供し、<br>地域産業の振興と住民同士の交流を促進します。</p>
            </div>
            <div class="uk-grid uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility_image01.svg" alt="" class="uk-width-expand">
                    <p class="uk-text-center">貸オフィス</p>
                    <p class="uk-margin-remove-top">地域外の企業や事業者が、地域の拠点として業務を行える専用オフィススペースを提供。リモートワークや地方での事業拠点として利用可能です。</p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility_image02.svg" alt="" class="uk-width-expand">
                    <p class="uk-text-center">コワーキングスペース</p>
                    <p class="uk-margin-remove-top">フリーランス、起業家、リモートワーカーが自由に利用できる共有オフィススペース。様々な分野の人々が集い、アイデアを共有し、コラボレーションを促進します。</p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility_image03.svg" alt="" class="uk-width-expand">
                    <p class="uk-text-center">イベントスペース</p>
                    <p class="uk-margin-remove-top">セミナーやワークショップ、地域イベント、展示会など、様々な用途に対応可能な多目的ホール。地域住民や企業が自由に利用でき、交流や学びの場を提供します。</p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility_image04.svg" alt="" class="uk-width-expand">
                    <p class="uk-text-center">シェアショップ</p>
                    <p class="uk-margin-remove-top">地元の特産品や手工芸品を販売・展示するスペース。地域のクリエイターや生産者が自分の商品を紹介し、販路を広げるためのプラットフォームとして利用できます。</p>
                </div>
            </div>
        </div>
        <div class="uk-align-center uk-text-center">
            <a class="uk-button uk-button-primary uk-text-uppercase uk-border-rounded" href="">read more</a>
        </div>
    </section>

    <section class="uk-section" id="howtouse">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bold">
                <span>
                    <div class="uk-navbar-subtitle">- how to use -</div>ご利用方法
                </span>
            </h2>
            <div class="uk-align-center uk-width-fit uk-align-center">
                <p>地域の未来を一緒に創りませんか？地域活性化支援センターの活用方法はこちらから！</p>
            </div>
        </div>
        <div class="uk-align-center uk-text-center">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/howtouse_button.svg" alt="" class="uk-width-auto"></a>
        </div>
    </section>

    <section class="uk-section uk-background-default" id="resident">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bold">
                <span>
                    <div class="uk-navbar-subtitle">- resident -</div>利用者紹介
                </span>
            </h2>
            <div class="uk-align-center uk-width-fit uk-align-center">
                <p>地域活性化支援センターでは、地域の発展に貢献する多様な入居者が活動しています。<br>
                    それぞれが独自のビジネスや活動を展開し、地域と連携しながら新たな価値を創出しています。<br>
                    ここでは、現在入居している架空の入居者をご紹介します。</p>
            </div>
            <div class="uk-grid uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/resident_image01.jpg" alt="" class="uk-width-expand"></div>
                    <div>
                        <span class="uk-label-default">農業コンサルティング</span>
                        <p class="uk-margin-remove-top">株式会社サステナブルファーム</p>
                        <p class="uk-margin-remove-top">地域の農業者向けに持続可能な農業技術や資源循環型の経営手法を提供する企業です。最先端のテクノロジーを活用し、地域の農業を効率化・高品質化することを目指しています。また、地元の農家とのコラボレーションプロジェクトも実施しており、新たな特産品の開発に取り組んでいます。</p>
                    </div>
                </div>
                <div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/resident_image02.jpg" alt="" class="uk-width-expand"></div>
                    <div>
                        <span class="uk-label-default">デザイン・アート制作</span>
                        <p class="uk-margin-remove-top">鶴田クリエイティブスタジオ</p>
                        <p class="uk-margin-remove-top">若手デザイナーやアーティストが集まり、地域の文化や伝統をモチーフにした作品を制作・発信しているスタジオです。地元の伝統工芸や自然をテーマに、現代的なデザインを融合させた商品やアート作品を展開し、国内外で注目を集めています。</p>
                    </div>
                </div>
                <div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/resident_image03.jpg" alt="" class="uk-width-expand"></div>
                    <div>
                        <span class="uk-label-default">教育・キャリア支援</span>
                        <p class="uk-margin-remove-top">ネクストステップ教育研究所</p>
                        <p class="uk-margin-remove-top">地域の若者向けにキャリア支援や学習サポートを提供する教育機関です。地方での進学や就職活動に関するコンサルティングや、リモートでのオンライン学習サポートを実施し、地域の未来を担う人材を育成しています。さらに、企業との連携を通じてインターンシップの機会も提供しています。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-align-center uk-text-center">
            <a class="uk-button uk-button-primary uk-text-uppercase uk-border-rounded" href="">read more</a>
        </div>
    </section>

    <section class="uk-section" id="access">
        <div class="uk-container">
            <div class="uk-grid uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bold">
                        <span>
                            <div class="uk-navbar-subtitle">- access -</div>アクセスマップ
                        </span>
                    </h2>
                    <div>
                        <p>この文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーです
                            文字の大きさ・量・字間・行間等を確認するために入れています
                            この文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れています文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れています</p>
                    </div>
                </div>
                <div class="uk-cover-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12086.966170091573!2d140.3886895!3d40.767709!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f9bae4a88c76bdd%3A0x4f8b8f59776af252!2z6ba055Sw55S656uL5rC05YWD5Lit5aSu5bCP5a2m5qCh!5e0!3m2!1sja!2sjp!4v1730253576713!5m2!1sja!2sjp" uk-cover></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section uk-section-primary" id="cta">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-child-width-1-3@m uk-grid-small uk-grid-match uk-text-white" uk-grid>
                <div class="uk-width-expand uk-flex uk-flex-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cta_image01.png" alt="" class="uk-width-large">
                </div>
                <div class="uk-width-1-2">
                    <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bold">
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
                </div>
                <div class="uk-width-expand uk-flex uk-flex-bottom uk-flex-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cta_image02.png" alt="" class="uk-width-large">
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section uk-background-default" id="links">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bold">
                LINKS
            </h2>
            <div class="uk-grid uk-child-width-1-6 uk-grid-small uk-grid-match" uk-grid>
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
                <div>
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/links_noimage.jpg" alt="" class="uk-width-expand"></a>
                </div>
                <div>
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/links_noimage.jpg" alt="" class="uk-width-expand"></a>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section uk-padding-remove-bottom">
        <div class="uk-container uk-container-large">
            <div class="uk-flex uk-flex-around uk-flex-middle uk-width-1-1">
                <div class="uk-flex uk-flex-middle">
                    <div class="uk-logo uk-margin-right"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt=""></div>
                    <div>
                        <a href="" uk-icon="icon: twitter"></a>
                        <a href="" uk-icon="icon: facebook"></a>
                        <a href="" uk-icon="icon: instagram"></a>
                    </div>
                </div>
                <div class="uk-flex uk-flex-middle">
                    <a href="#" class="uk-margin-right">
                        <div class="uk-text-center">
                            営業時間09:00〜18:00
                            <div class="uk-navbar-subtitle uk-text-large">0173-26-5888</div>
                        </div>
                    </a>
                    <a class="uk-button uk-button-default uk-border-rounded" href="">ご予約はこちらから</a>
                </div>
            </div>
            <hr>
            <ul class="uk-nav uk-flex uk-flex-around uk-flex-middle">
                <li><a href="#">ホーム</a></li>
                <li><a href="#">事業紹介</a></li>
                <li><a href="#">施設概要</a></li>
                <li><a href="#">利用者紹介</a></li>
                <li><a href="#">ご利用方法</a></li>
                <li><a href="#">お知らせ</a></li>
                <li><a href="#">お問い合わせ</a></li>
            </ul>
        </div>
        <div class="uk-background-primary uk-margin-large-top uk-text-white">
            <div class="uk-container">
                <div class="uk-flex uk-flex-middle uk-flex-around uk-text-small uk-padding-small">
                    <p class="uk-margin-remove"><a href="" class="uk-text-white">個人情報保護方針</a></p>
                    <p class="uk-margin-remove">© 2024 TSURUTA LABO. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>