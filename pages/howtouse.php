<?php
/*
Template Name: ご利用方法
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

    <section class="uk-section" id="howtouse_header">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder uk-position-relative">
                <span>
                    <div class="uk-navbar-subtitle">- how to use -</div>施設の利用方法（貸オフィス以外）
                </span>
            </h2>
            <div class="uk-margin-auto uk-width-fit uk-margin-large-bottom">
                <div class="uk-width-3-4@m uk-margin-auto">
                    <p>「TSURUTA LABOでは、皆様に安心して施設をご利用いただけるよう、会員登録をしていただいた上でのご利用をお願いしております。」</p>
                    <ul class="uk-list">
                        <li>※ＷＥＢでの空き状況確認・予約は現在準備中です。</li>
                        <li>※利用料金のお支払い方法は現金のみとなります。オンライン決済は現在準備中です。</li>
                        <li>※貸オフィスのご利用については、お問い合わせフォームよりご相談ください。</li>
                    </ul>
                </div>
            </div>

            <div>
                <div class="uk-background-default uk-padding uk-flex uk-flex-column uk-flex-row@s uk-flex-middle uk-flex-between uk-flex-gap">
                    <div class="uk-width-expand">
                        <h3 class="uk-text-bold uk-text-center uk-text-left@s">見学予約・お問い合わせ（必要に応じて）</h3>
                        <p>必要に応じて、お問い合わせフォームから見学予約や利用に関するご質問をお送りください。</p>
                    </div>
                    <div class="uk-width-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_howtouse_header_image01.svg" alt="お問い合わせ・見学予約の手順イメージ">
                    </div>
                </div>
                <div class="uk-text-center">
                    <span uk-icon="icon: triangle-down; ratio: 2"></span>
                </div>
                <div class="uk-background-default uk-padding uk-flex uk-flex-column uk-flex-row@s uk-flex-middle uk-flex-between uk-flex-gap">
                    <div class="uk-width-expand">
                        <h3 class="uk-text-bold uk-text-center uk-text-left@s">空き状況の確認</h3>
                        <p>ご利用いただくスペース（イベントスペース、体育館など）の空き状況を、窓口にてご確認ください。</p>
                    </div>
                    <div class="uk-width-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_howtouse_header_image02.svg" alt="プラン選択と契約手続きのイメージ">
                    </div>
                </div>
                <div class="uk-text-center">
                    <span uk-icon="icon: triangle-down; ratio: 2"></span>
                </div>
                <div class="uk-background-default uk-padding uk-flex uk-flex-column uk-flex-row@s uk-flex-middle uk-flex-between uk-flex-gap">
                    <div class="uk-width-expand">
                        <h3 class="uk-text-bold uk-text-center uk-text-left@s">会員登録</h3>
                        <p>施設のご利用には会員登録が必要です。以下のリンク（Googleフォーム）から会員登録申請をお願いします。</p>
                        <a class="uk-button uk-button-default uk-border-rounded uk-margin-small-right uk-margin-small-left" href="https://forms.gle/VDL9HTEoMzEAG34T9" target="_blank" rel="noopener noreferrer">会員登録申請専用フォーム</a>
                    </div>
                    <div class="uk-width-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_howtouse_header_image03.svg" alt="お問い合わせ・見学予約のイメージ">
                    </div>
                </div>
                <div class="uk-text-center">
                    <span uk-icon="icon: triangle-down; ratio: 2"></span>
                </div>
                <div class="uk-background-default uk-padding uk-flex uk-flex-column uk-flex-row@s uk-flex-middle uk-flex-between uk-flex-gap">
                    <div class="uk-width-expand">
                        <h3 class="uk-text-bold uk-text-center uk-text-left@s">会員番号の確認</h3>
                        <p>会員登録申請後、不備がなければ３営業日以内に会員番号をメールでお知らせします。</p>
                    </div>
                    <div class="uk-width-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_howtouse_header_image04.svg" alt="お問い合わせ・見学予約のイメージ">
                    </div>
                </div>
                <div class="uk-text-center">
                    <span uk-icon="icon: triangle-down; ratio: 2"></span>
                </div>
                <div class="uk-background-default uk-padding uk-flex uk-flex-column uk-flex-row@s uk-flex-middle uk-flex-between uk-flex-gap">
                    <div class="uk-width-expand">
                        <h3 class="uk-text-bold uk-text-center uk-text-left@s">利用予約</h3>
                        <p>会員番号とご利用いただくスペース、ご利用日時を、窓口にてお知らせいただき、ご予約ください。</p>
                    </div>
                    <div class="uk-width-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_howtouse_header_image05.svg" alt="お問い合わせ・見学予約のイメージ">
                    </div>
                </div>
                <div class="uk-text-center">
                    <span uk-icon="icon: triangle-down; ratio: 2"></span>
                </div>
                <div class="uk-background-default uk-padding uk-flex uk-flex-column uk-flex-row@s uk-flex-middle uk-flex-between uk-flex-gap">
                    <div class="uk-width-expand">
                        <h3 class="uk-text-bold uk-text-center uk-text-left@s">利用料金のお支払い</h3>
                        <p>ご利用前日までに、利用料金をお支払いください。</p>
                    </div>
                    <div class="uk-width-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_howtouse_header_image06.svg" alt="お問い合わせ・見学予約のイメージ">
                    </div>
                </div>
                <div class="uk-text-center">
                    <span uk-icon="icon: triangle-down; ratio: 2"></span>
                </div>
                <div class="uk-background-default uk-padding uk-flex uk-flex-column uk-flex-row@s uk-flex-middle uk-flex-between uk-flex-gap">
                    <div class="uk-width-expand">
                        <h3 class="uk-text-bold uk-text-center uk-text-left@s">ご利用開始！</h3>
                        <p>予約いただいた日時に来館いただき、ご利用ください。</p>
                    </div>
                    <div class="uk-width-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_howtouse_header_image07.svg" alt="お問い合わせ・見学予約のイメージ">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section uk-background-default" id="rhowtouse_main">
        <div class="uk-container uk-container-large">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder uk-position-relative">
                <span>
                    <div class="uk-navbar-subtitle">- fee details -</div>料金詳細
                </span>
            </h2>
            <div class="uk-margin-auto uk-width-fit uk-margin-large-bottom">
                <div class="uk-width-3-4@m uk-margin-auto">
                    <p>TSURUTA LABOでは、施設内の様々なスペースやサービスを、利用者のニーズに応じて柔軟にご利用いただける料金体系を設けています。</p>
                    <p class="uk-margin-remove">※すべて税込表示です。</p>
                    <p class="uk-margin-remove">※大型ディスプレイ、レジ設備等、備品の貸し出しも行っております。<a href="" class="uk-text-decoration-none uk-border-solid">詳しくはこちら</a></p>
                </div>
            </div>

            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                <div class="uk-panel uk-margin-bottom">
                    <div class="uk-card uk-card-default uk-padding uk-border-rounded">
                        <div class="uk-text-center">
                            <h3 class="uk-card-title">コワーキングスペース</h3>
                            <p>利用時間<span class="uk-margin-left">9:00～18:00</span></p>
                            <p class="uk-margin-remove">月額利用</p>
                            <p><span class="uk-heading-large uk-text-primary uk-margin-remove">8,000</span>円</p>
                            <ul class="uk-list">
                                <li>1時間あたり<span class="uk-heading-small uk-text-primary uk-margin-left">300</span>円</li>
                                <li>日額利用<span class="uk-heading-small uk-text-primary uk-margin-left">1,000</span>円</li>
                            </ul>
                        </div>
                        <ul class="uk-list uk-margin-medium-bottom">
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>Wi-Fi、電源、コピー機完備
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>スマートロックによる入退室
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>WEB会議用ブース利用可（時間予約制）
                            </li>
                        </ul>
                        <div class="uk-flex uk-flex-center uk-flex-middle uk-flex-gap">
                            <p class="uk-margin-remove"><a href="<?php echo home_url("/contact"); ?>" class="uk-button uk-button-default uk-border-rounded">お問い合わせ</a></p>
                        </div>
                    </div>
                </div>
                <div class="uk-panel uk-margin-bottom">
                    <div class="uk-card uk-card-default uk-padding uk-border-rounded">
                        <div class="uk-text-center">
                            <h3 class="uk-card-title uk-margin-remove">イベントスペース</h3>
                            <p class="uk-margin-remove">（旧理科室、旧家庭科室、その他）</p>
                            <p>利用時間<span class="uk-margin-left">9:00～18:00</span></p>
                            <p class="uk-margin-remove">日額利用</p>
                            <p><span class="uk-heading-large uk-text-primary uk-margin-remove">5,000</span>円</p>
                            <ul class="uk-list">
                                <li>1時間あたり<span class="uk-heading-small uk-text-primary uk-margin-left">600</span>円</li>
                            </ul>
                        </div>
                        <ul class="uk-list uk-margin-medium-bottom">
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>高校生以下は半額
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>スマートロックによる入退室（一部、物理鍵あり）
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>レイアウトのカスタマイズ可（机、椅子の配置等）
                            </li>
                        </ul>
                        <div class="uk-flex uk-flex-center uk-flex-middle uk-flex-gap">
                            <p class="uk-margin-remove"><a href="<?php echo home_url("/contact"); ?>" class="uk-button uk-button-default uk-border-rounded">お問い合わせ</a></p>
                        </div>
                    </div>
                </div>
                <div class="uk-panel uk-margin-bottom">
                    <div class="uk-card uk-card-default uk-padding uk-border-rounded">
                        <div class="uk-text-center">
                            <h3 class="uk-card-title">シェアショップ</h3>
                            <p>利用時間<span class="uk-margin-left">9:00～18:00</span></p>
                            <p class="uk-margin-remove">日額利用</p>
                            <p><span class="uk-heading-large uk-text-primary uk-margin-remove">3,000</span>円</p>
                        </div>
                        <ul class="uk-list uk-margin-medium-bottom">
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>高校生以下は半額
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>Wi-Fi、電源完備
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>スマートロックによる入退室
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>レジ設備の貸し出し可（エアレジ・有料）
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>レイアウトのカスタマイズ可（レジカウンターの配置等）
                            </li>
                        </ul>
                        <div class="uk-flex uk-flex-center uk-flex-middle uk-flex-gap">
                            <p class="uk-margin-remove"><a href="<?php echo home_url("/contact"); ?>" class="uk-button uk-button-default uk-border-rounded">お問い合わせ</a></p>
                        </div>
                    </div>
                </div>
                <div class="uk-panel uk-margin-bottom">
                    <div class="uk-card uk-card-default uk-padding uk-border-rounded">
                        <div class="uk-text-center">
                            <h3 class="uk-card-title">会議室</h3>
                            <p>利用時間<span class="uk-margin-left">9:00～18:00</span></p>
                            <p class="uk-margin-remove">1時間あたり</p>
                            <p><span class="uk-heading-large uk-text-primary uk-margin-remove">300</span>円</p>
                        </div>
                        <ul class="uk-list uk-margin-medium-bottom">
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>Wi-Fi、電源完備
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>スマートロックによる入退室
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>最大収容人数<span class="uk-margin-small-left">10名</span>
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>レイアウトのカスタマイズ可（机、椅子の配置等）
                            </li>
                        </ul>
                        <div class="uk-flex uk-flex-center uk-flex-middle uk-flex-gap">
                            <p class="uk-margin-remove"><a href="<?php echo home_url("/contact"); ?>" class="uk-button uk-button-default uk-border-rounded">お問い合わせ</a></p>
                        </div>
                    </div>
                </div>
                <div class="uk-panel uk-margin-bottom">
                    <div class="uk-card uk-card-default uk-padding uk-border-rounded">
                        <div class="uk-text-center">
                            <h3 class="uk-card-title">体育館</h3>
                            <p>利用時間<span class="uk-margin-left">9:00～22:00</span></p>
                            <p class="uk-margin-remove">団体（大人8名以上）</p>
                            <p><span class="uk-heading-large uk-text-primary uk-margin-remove">800</span>円</p>
                            <ul class="uk-list">
                                <li>1時間あたり 大人1名<span class="uk-heading-small uk-text-primary uk-margin-left">100</span>円</li>
                            </ul>
                        </div>
                        <ul class="uk-list uk-margin-medium-bottom">
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>高校生以下無料
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>スポーツ・演劇・ダンス・大規模イベント等にも
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>スマートロックによる入退館
                            </li>
                        </ul>
                        <p class="uk-margin-bottom">※備品の貸し出しは現在調整中です</p>
                        <div class="uk-flex uk-flex-center uk-flex-middle uk-flex-gap">
                            <p class="uk-margin-remove"><a href="<?php echo home_url("/contact"); ?>" class="uk-button uk-button-default uk-border-rounded">お問い合わせ</a></p>
                        </div>
                    </div>
                </div>
                <div class="uk-panel uk-margin-bottom">
                    <div class="uk-card uk-card-default uk-padding uk-border-rounded">
                        <div class="uk-text-center">
                            <h3 class="uk-card-title">グラウンド</h3>
                            <p>利用時間<span class="uk-margin-left">9:00～18:00</span></p>
                            <p class="uk-margin-remove">団体（大人8名以上）</p>
                            <p><span class="uk-heading-large uk-text-primary uk-margin-remove">800</span>円</p>
                            <ul class="uk-list">
                                <li>1時間あたり 大人1名<span class="uk-heading-small uk-text-primary uk-margin-left">100</span>円</li>
                            </ul>
                        </div>
                        <ul class="uk-list uk-margin-medium-bottom">
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>高校生以下無料
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>スポーツ・大規模イベント等にも
                            </li>
                        </ul>
                        <div class="uk-flex uk-flex-center uk-flex-middle uk-flex-gap">
                            <p class="uk-margin-remove"><a href="<?php echo home_url("/contact"); ?>" class="uk-button uk-button-default uk-border-rounded">お問い合わせ</a></p>
                        </div>
                    </div>
                </div>
                <div class="uk-panel uk-margin-bottom">
                    <div class="uk-card uk-card-default uk-padding uk-border-rounded">
                        <div class="uk-text-center">
                            <h3 class="uk-card-title">貸オフィス</h3>
                            <p class="uk-margin-remove">月額利用</p>
                            <p><span class="uk-heading-large uk-text-primary uk-margin-remove">40,000</span>円</p>
                            <ul class="uk-list">
                                <li>空調設備管理費<span class="uk-heading-small uk-text-primary uk-margin-left">3,000</span>円/月</li>
                                <li>共通管理費<span class="uk-heading-small uk-text-primary uk-margin-left">3,000</span>円/月</li>
                            </ul>
                        </div>
                        <ul class="uk-list uk-margin-medium-bottom">
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>Wi-Fi、電源完備
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>スマートロックによる入退室
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>24時間入退室可
                            </li>
                            <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                <span uk-icon="icon: check"></span>施設への協力による利用料減免制度あり（詳しくはお尋ねください）
                            </li>
                        </ul>
                        <div class="uk-flex uk-flex-center uk-flex-middle uk-flex-gap">
                            <p class="uk-margin-remove"><a href="<?php echo home_url("/contact"); ?>" class="uk-button uk-button-default uk-border-rounded">お問い合わせ</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>