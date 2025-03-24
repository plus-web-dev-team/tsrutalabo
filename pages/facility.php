<?php
/*
Template Name: 施設概要
*/
get_header();
?>

<main>
    <section class="uk-section uk-page-header">
        <div class="uk-container">
            <?php
            include get_template_directory() . '/components/breadcrumb.php';
            if (function_exists('display_breadcrumb')) {
                display_breadcrumb();
            }
            ?>
        </div>
    </section>

    <section class="uk-section" id="facility_header">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder uk-position-relative">
                <span>
                    <div class="uk-navbar-subtitle">- facilities map -</div>施設案内マップ
                </span>
            </h2>
            <div class="uk-margin-auto uk-width-fit uk-margin-large-bottom">
                <div class="uk-width-3-4@m uk-margin-auto">
                    <p>旧鶴田町立水元中央小学校は、青森県鶴田町にかつて存在した小学校で、２００６年に旧水元小学校、旧水元小学校田の尻分校、旧妙堂崎小学校の３校が合併して創立しました。</p>

                    <p>この学校は水元地区の教育の中心地として、地元の文化や伝統を継承しながら、たくさんの子どもたちを育んできました。地域に愛され、地域コミュニティの一端を担う重要な存在でもありました。しかし、少子化と過疎化の進行に伴い、児童数が減少したため、地域の学校再編の一環で鶴田小学校への統合が決まり、２０２０年に閉校となりました。閉校後もその建物は取り壊されることなく残されており、地域資源として新たな形で再活用する構想が生まれました。</p>

                    <p>学校の建物自体が持つ象徴的な存在感を活かしながら、鶴田町の地域資源を次世代に引き継ぎ、未来に向けて発展していくためのプロジェクトとなっています。</p>
                </div>
            </div>
            <ul class="uk-flex-center" uk-tab>
                <li class="uk-active uk-width-1-6"><a class="uk-button" href="#">1階</a></li>
                <li class="uk-width-1-6"><a class="uk-button" href="#">2階</a></li>
            </ul>
            <ul class="uk-switcher uk-margin">
                <li>
                    <!-- Tab 1 の内容 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/page_facility_header_image01.svg" alt="施設案内1階マップ" class="uk-width-3-4 uk-align-center">
                </li>
                <li>
                    <!-- Tab 2 の内容 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/page_facility_header_image02.svg" alt="施設案内2階マップ" class="uk-width-3-4 uk-align-center">
                </li>
            </ul>
        </div>
    </section>

    <section class="uk-section uk-background-default" id="facility_main">
        <div class="uk-container uk-position-relative">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder">
                <span>
                    <div class="uk-navbar-subtitle">- historical and modern -</div>木の温かみを感じるモダンな空間
                </span>
            </h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/page_facility_main_image01.svg" alt="施設の木の温かみが感じられるイメージ画像" class="uk-position-small uk-position-top-right uk-visible@m uk-width-small">
            <div class="uk-width-3-4@m uk-margin-auto uk-margin-large-bottom">
                <p>旧鶴田町立水元中央小学校は、かつて地域の子どもたちが学びの場として親しんだ歴史的な建物です。その建物が、地域活性化支援センターとして新たな命を吹き込まれました。施設は、昔ながらの温かみある木造校舎の趣を残しつつ、現代的な機能性を兼ね備えた設備に生まれ変わり、「歴史とモダンが融合した空間」を提供しています。</p>
            </div>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="finite:true">
                <div class="uk-slider-container">
                    <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-grid">
                        <div class="uk-panel">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/page_facility_main_image02.png" alt="スマートロック付きのオフィス画像" class="uk-width-expand uk-margin-bottom">
                            <div>
                                <h3 class="uk-text-primary">スマートロック常設。24時間入退出可能なオフィス！</h3>
                                <p class="uk-text-primary">木のぬくもりを感じる70㎡の広々としたスペースで、一般的なオフィスワークのみならず、アーティストさんのアトリエや店舗利用など使い方は無限大。
                                    複合施設でありながら事業者のお仕事の形にあわせて自由に利用可能。
                                    窓から一面の田んぼや岩木山を眺め、四季を感じながら最高のロケーションで仕事ができます。</p>
                            </div>
                        </div>
                        <div class="uk-panel">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/page_facility_main_image03.png" alt="ワークスペースのイメージ画像" class="uk-width-expand uk-margin-bottom">
                            <div>
                                <h3 class="uk-text-primary">１時間からの利用もOK！集中して作業をしたい方のワークスペース</h3>
                                <p class="uk-text-primary">スマートロック、Wi-Fi、電源、コピー機、個室（1ヵ所）完備。１時間～のドロップインも、月単位での契約も可能です。
                                    打合せや会議をしたい場合は個室も利用可能。
                                    リモートワークや、帰省時のちょっとしたお仕事などにもお気軽にご利用ください！</p>
                            </div>
                        </div>
                        <div class="uk-panel">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/page_facility_main_image04.png" alt="元小学校を利用したイベントスペース画像" class="uk-width-expand uk-margin-bottom">
                            <div>
                                <h3 class="uk-text-primary">元小学校を活かした、個性あふれるイベントスペース</h3>
                                <p class="uk-text-primary">シンクがたくさんある旧理科室（イベントスペース１）、電源がたくさんある旧図工室（イベントスペース２）、調理可能な旧家庭科室、広々空間の旧コンピューター室、ちょっとした防音の旧音楽室、18畳の旧茶道室など、使いたい用途にあわせた機能が備わった多様なイベントスペースです。
                                    半日、１日単位で利用可能です！</p>
                            </div>
                        </div>
                        <div class="uk-panel">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/page_facility_main_image05.png" alt="チャレンジ専用空間のイメージ画像" class="uk-width-expand uk-margin-bottom">
                            <div>
                                <h3 class="uk-text-primary">１日～利用可能！催事や販売等のチャレンジ専用空間</h3>
                                <p class="uk-text-primary">4m×4m。小学校で校長先生が使っていた演台をレジカウンターに利用可能です。
                                    レジ（エアレジ・有料）を貸し出しできますので、
                                    自身でキャッシュレス会計手段を持っていない方でもキャッシュレス決済を導入することができ、お客様への利便性を高められます。</p>
                            </div>
                        </div>
                        <div class="uk-panel">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/page_facility_main_image06.png" alt="体育館とグラウンドの画像" class="uk-width-expand uk-margin-bottom">
                            <div>
                                <h3 class="uk-text-primary">廃校とは思えない綺麗な体育館とグラウンド</h3>
                                <p class="uk-text-primary">スポーツはもちろん、演劇、ダンス、大規模イベントなど使い方は無限大！
                                    １時間～利用可能なので、コワーキング等を利用した際の仕事の息抜きや健康維持にもぜひご利用ください。
                                    体育館は更衣室・トイレ完備。スマートロックでの管理により、夜の時間帯も利用できます！また、グラウンドは多目的に利用可能なグラウンドと野球場があります！</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href uk-slidenav-next uk-slider-item="next"></a>
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>

        </div>
    </section>

    <?php
    include get_template_directory() . '/components/accessmap.php';

    if (function_exists('display_accessmap')) {
        display_accessmap();
    }
    ?>
    <?php
    include get_template_directory() . '/components/cta.php';
    ?>
    <?php
    include get_template_directory() . '/components/banner.php';
    ?>
</main>
<?php get_footer(); ?>