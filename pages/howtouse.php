<?php
/*
Template Name: ご利用方法
*/
?>

<?php get_header(); ?>
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
                    <div class="uk-navbar-subtitle">- how to use -</div>施設の利用方法
                </span>
            </h2>
            <div>
                <div class="uk-background-default uk-padding uk-flex uk-flex-column uk-flex-row@s uk-flex-middle uk-flex-between uk-flex-gap">
                    <div class="uk-width-expand">
                        <h3 class="uk-text-bold uk-text-center uk-text-left@s">お問い合わせ・見学予約</h3>
                        <p>まずはお問い合わせフォームから見学予約や利用に関するご質問をお送りください。スタッフが詳しいご案内をいたします。</p>
                    </div>
                    <div class="uk-width-auto"><img src="<?php echo get_template_directory_uri(); ?>/images/page_howtouse_header_image01.svg" alt=""></div>
                </div>
                <div class="uk-text-center">
                    <span uk-icon="icon: triangle-down; ratio: 2"></span>
                </div>
                <div class="uk-background-default uk-padding uk-flex uk-flex-column uk-flex-row@s uk-flex-middle uk-flex-between uk-flex-gap">
                    <div class="uk-width-expand">
                        <h3 class="uk-text-bold uk-text-center uk-text-left@s">プラン選択と契約手続き</h3>
                        <p>ご利用いただくスペース（貸オフィス、コワーキングスペースなど）とプランを選び、契約手続きを行います。必要に応じて、支払い方法のご相談も可能です。</p>
                    </div>
                    <div class="uk-width-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_howtouse_header_image02.svg" alt="">
                    </div>
                </div>
                <div class="uk-text-center">
                    <span uk-icon="icon: triangle-down; ratio: 2"></span>
                </div>
                <div class="uk-background-default uk-padding uk-flex uk-flex-column uk-flex-row@s uk-flex-middle uk-flex-between uk-flex-gap">
                    <div class="uk-width-expand">
                        <h3 class="uk-text-bold uk-text-center uk-text-left@s">お問い合わせ・見学予約</h3>
                        <p>まずはお問い合わせフォームから見学予約や利用に関するご質問をお送りください。スタッフが詳しいご案内をいたします。</p>
                    </div>
                    <div class="uk-width-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_howtouse_header_image03.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section uk-background-default" id="rhowtouse_main">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder uk-position-relative">
                <span>
                    <div class="uk-navbar-subtitle">- fee details -</div>料金詳細
                </span>
            </h2>
            <div class="uk-margin-auto uk-width-fit uk-margin-large-bottom">
                <div class="uk-width-3-4@m uk-margin-auto">
                    <p>地域活性化支援センターでは、施設内の様々なスペースやサービスを、利用者のニーズに応じて柔軟にご利用いただけるよう、明確な料金体系を設けています。以下は、貸オフィス、コワーキングスペース、イベントスペース、シェアショップなどの利用に関する料金詳細です。</p>
                </div>
            </div>
            <div class="uk-slider-container-offset" uk-slider="center: true">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    <div class="uk-slider-items uk-child-width-1-3@s uk-grid uk-width-1-1 uk-width-5-6@m uk-margin-auto">
                        <div class="uk-width-1-1 uk-width-3-4@s">
                            <div class="uk-card uk-card-default uk-padding">
                                <div class="uk-text-center">
                                    <h3 class="uk-card-title">コワーキングスペース</h3>
                                    <p class="uk-text-lead">000,000円</p>
                                    <p>月額（税込）</p>
                                </div>
                                <ul class="uk-list uk-margin-medium-bottom">
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>高速Wi-Fi、電源完備
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>ドリンクサービス（無料）
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>会員専用の予約システムによる優先席利用
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>オンラインミーティング用ブース利用可（時間予約制）
                                    </li>
                                    <li class="uk-border-solid uk-text-muted uk-padding-small uk-padding-remove-left uk-margin-bottom"><span uk-icon="icon: check"></span>プラン内容が入ります</li>
                                    <li class="uk-border-solid uk-text-muted uk-padding-small uk-padding-remove-left uk-margin-bottom"><span uk-icon="icon: check"></span>プラン内容が入ります</li>
                                </ul>
                                <div class="uk-text-center">
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-3-4@s">
                            <div class="uk-card uk-card-default uk-padding">
                                <div class="uk-text-center">
                                    <h3 class="uk-card-title">コワーキングスペース</h3>
                                    <p class="uk-text-lead">000,000円</p>
                                    <p>月額（税込）</p>
                                </div>
                                <ul class="uk-list uk-margin-medium-bottom">
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>高速Wi-Fi、電源完備
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>ドリンクサービス（無料）
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>会員専用の予約システムによる優先席利用
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>オンラインミーティング用ブース利用可（時間予約制）
                                    </li>
                                    <li class="uk-border-solid uk-text-muted uk-padding-small uk-padding-remove-left uk-margin-bottom"><span uk-icon="icon: check"></span>プラン内容が入ります</li>
                                    <li class="uk-border-solid uk-text-muted uk-padding-small uk-padding-remove-left uk-margin-bottom"><span uk-icon="icon: check"></span>プラン内容が入ります</li>
                                </ul>
                                <div class="uk-text-center">
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-3-4@s">
                            <div class="uk-card uk-card-default uk-padding">
                                <div class="uk-text-center">
                                    <h3 class="uk-card-title">コワーキングスペース</h3>
                                    <p class="uk-text-lead">000,000円</p>
                                    <p>月額（税込）</p>
                                </div>
                                <ul class="uk-list uk-margin-medium-bottom">
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>高速Wi-Fi、電源完備
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>ドリンクサービス（無料）
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>会員専用の予約システムによる優先席利用
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>オンラインミーティング用ブース利用可（時間予約制）
                                    </li>
                                    <li class="uk-border-solid uk-text-muted uk-padding-small uk-padding-remove-left uk-margin-bottom"><span uk-icon="icon: check"></span>プラン内容が入ります</li>
                                    <li class="uk-border-solid uk-text-muted uk-padding-small uk-padding-remove-left uk-margin-bottom"><span uk-icon="icon: check"></span>プラン内容が入ります</li>
                                </ul>
                                <div class="uk-text-center">
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-3-4@s">
                            <div class="uk-card uk-card-default uk-padding">
                                <div class="uk-text-center">
                                    <h3 class="uk-card-title">コワーキングスペース</h3>
                                    <p class="uk-text-lead">000,000円</p>
                                    <p>月額（税込）</p>
                                </div>
                                <ul class="uk-list uk-margin-medium-bottom">
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>高速Wi-Fi、電源完備
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>ドリンクサービス（無料）
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>会員専用の予約システムによる優先席利用
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>オンラインミーティング用ブース利用可（時間予約制）
                                    </li>
                                    <li class="uk-border-solid uk-text-muted uk-padding-small uk-padding-remove-left uk-margin-bottom"><span uk-icon="icon: check"></span>プラン内容が入ります</li>
                                    <li class="uk-border-solid uk-text-muted uk-padding-small uk-padding-remove-left uk-margin-bottom"><span uk-icon="icon: check"></span>プラン内容が入ります</li>
                                </ul>
                                <div class="uk-text-center">
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-3-4@s">
                            <div class="uk-card uk-card-default uk-padding">
                                <div class="uk-text-center">
                                    <h3 class="uk-card-title">コワーキングスペース</h3>
                                    <p class="uk-text-lead">000,000円</p>
                                    <p>月額（税込）</p>
                                </div>
                                <ul class="uk-list uk-margin-medium-bottom">
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>高速Wi-Fi、電源完備
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>ドリンクサービス（無料）
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>会員専用の予約システムによる優先席利用
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>オンラインミーティング用ブース利用可（時間予約制）
                                    </li>
                                    <li class="uk-border-solid uk-text-muted uk-padding-small uk-padding-remove-left uk-margin-bottom"><span uk-icon="icon: check"></span>プラン内容が入ります</li>
                                    <li class="uk-border-solid uk-text-muted uk-padding-small uk-padding-remove-left uk-margin-bottom"><span uk-icon="icon: check"></span>プラン内容が入ります</li>
                                </ul>
                                <div class="uk-text-center">
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-3-4@s">
                            <div class="uk-card uk-card-default uk-padding">
                                <div class="uk-text-center">
                                    <h3 class="uk-card-title">コワーキングスペース</h3>
                                    <p class="uk-text-lead">000,000円</p>
                                    <p>月額（税込）</p>
                                </div>
                                <ul class="uk-list uk-margin-medium-bottom">
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>高速Wi-Fi、電源完備
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>ドリンクサービス（無料）
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>会員専用の予約システムによる優先席利用
                                    </li>
                                    <li class="uk-border-solid uk-padding-small uk-padding-remove-left uk-margin-bottom">
                                        <span uk-icon="icon: check"></span>オンラインミーティング用ブース利用可（時間予約制）
                                    </li>
                                    <li class="uk-border-solid uk-text-muted uk-padding-small uk-padding-remove-left uk-margin-bottom"><span uk-icon="icon: check"></span>プラン内容が入ります</li>
                                    <li class="uk-border-solid uk-text-muted uk-padding-small uk-padding-remove-left uk-margin-bottom"><span uk-icon="icon: check"></span>プラン内容が入ります</li>
                                </ul>
                                <div class="uk-text-center">
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                    <p><a href="#" class="uk-button uk-button-default uk-border-rounded">必要書類のダウンロードリンク</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>
        </div>
    </section>

    <section class="uk-section" id="rhowtouse_footer">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s" uk-grid>
                <div>
                    <div class="uk-card uk-card-primary uk-card-body">
                        <h3 class="uk-text-center">シェアショップ</h3>
                        <p>
                            地域の手作り品やアート作品を展示・販売できるスペースです。店舗を持たずに商品を展開したい方に最適です。
                        </p>
                        <p class="uk-text-center"><a href="">必要書類のダウンロードリンク</a></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-primary uk-card-body">
                        <h3 class="uk-text-center">会議室</h3>
                        <p>
                            少人数での打ち合わせや会議にご利用いただける個室の会議室です。
                        </p>
                        <p class="uk-text-center"><a href="">必要書類のダウンロードリンク</a></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-primary uk-card-body">
                        <h3 class="uk-text-center">その他のサービス</h3>
                        <p>
                            快適かつ便利にご利用いただけるよう、様々な追加サービスも提供しています。ご利用者のニーズに応じたサービスをご用意し、より充実した施設利用をサポートします。
                        </p>
                        <p class="uk-text-center"><a href="">必要書類のダウンロードリンク</a></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card">
                        <div class="uk-flex uk-flex-middle uk-flex-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/page_howtouse_header_image04.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>