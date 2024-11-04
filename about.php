<?php
/*
Template Name: 事業紹介
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

    <section class="uk-section" id="about_header">
        <div class="uk-container">
            <div class="uk-grid uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m" uk-grid>
                <div>
                    <h2 class="uk-text-bolder">今よりも魅力的で活気ある鶴田町へ</h2>
                    <p class="uk-line-height-1-8">センターの主な目的は、地域資源や産業を活用しながら、新たな事業やプロジェクトを創出し、地域社会に貢献することです。貸オフィスでは、地域内外の企業や個人がオフィスや店舗・サテライトオフィスとして利用でき、コワーキングスペースでは、企業や個人がリモートワーク拠点としてフレキシブルに利用できます。イベントスペースでは地域イベントやセミナー、ワークショップが定期的に開催され、シェアショップでは、クリエイターや店舗を持っていない方に対して、短期的に作品や商品等を販売する『チャレンジの場』を提供します。
                        鶴田町の地域資源を活かした新たなビジネスやコミュニティ活動を推進し、持続可能な地域発展の礎を築きます。地域の皆さまとともに、より良い未来に向けた取り組みを続け、鶴田町が一層魅力的で活気ある地域となることを目指します。</p>
                </div>
                <div class="uk-width-3-4 uk-width-expand@m uk-margin-auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/page_about_header_image01.svg" alt="" class="uk-width-expand">
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section uk-background-default" id="about_main-header">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder uk-position-relative">
                <span>
                    <div class="uk-navbar-subtitle">- about tsuruta-machi -</div>未来へと続く地域づくりの町「鶴田町」
                </span>
                <img src="<?php echo get_template_directory_uri(); ?>/images/page_about_main_image01.svg" alt="" class="uk-position-top-right">
            </h2>
            <div class="uk-margin-auto uk-width-fit uk-margin-large-bottom">
                <div class="uk-width-3-4@m uk-margin-auto">
                    <p>鶴田町（つるたまち）は、青森県の西北部、津軽平野に位置する自然豊かな町です。町の名前は、その美しい自然と調和した風景から名付けられ、四季折々の美しい景観が広がっています。町の象徴的な景観の1つは、津軽富士とも呼ばれる「岩木山」。その雄大な姿は、町の至るところから望むことができ、地域住民にとって心の拠り所となっています。</p>

                    <p>また、鶴田町は農業が盛んな地域としても知られており、とくにスチューベンという甘くて芳醇なぶどうや、国内外で高い評価を受けるりんごの生産地として有名です。肥沃な大地と津軽の厳しい寒さを利用した農作物は、栄養価が高く、地元だけでなく遠方からの需要も多いです。</p>

                    <p>さらに、町を流れる岩木川の豊富な水資源を活かして米作りが行われており、ここで育てられるお米はその粘りと甘みでとくに高い評価を得ています。鶴田町の農産物は、町の経済の基盤を支え、地元の食文化にも深く根付いています。</p>

                    <p>文化面では、鶴田町は伝統的な祭りや文化イベントが盛んです。夏には「つるたまつり」が開催され、地元住民や観光客が一体となって楽しむイベントが行われます。このような地域文化の継承と発展も、町の大切な魅力の1つです。</p>

                    <p>人口減少や高齢化が進む中、地域活性化の取り組みも積極的に行われており、新しい産業や人材の誘致・町のコミュニティ活動の振興に力を入れるべく、旧小学校を利活用した「地域活性化支援センター」を設立しました。</p>
                </div>
            </div>
            <div>
                <div class="uk-flex uk-flex-middle uk-flex-column uk-flex-row@m uk-margin-large-bottom">
                    <div class="uk-margin-bottom uk-margin-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_about_main_image02.png" alt="" class="uk-width-expand">
                    </div>
                    <div class="uk-margin-left">
                        <h3 class="uk-text-bolder">鶴田町の気候が生んだ芳醇な甘みとコクを誇る<br>
                            「スチューベン」</h3>
                        <p class="uk-margin-remove-top">鶴田町は、日本有数のスチューベンの産地として知られています。スチューベンはアメリカ原産の甘く濃厚な風味を持つぶどうで、食卓に並ぶだけでなく、ワインやジュースの原料としても人気です。その高い糖度と芳醇な香りが特徴で、とくに寒暖差のある鶴田町の気候が美味しいスチューベンを育てます。</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_about_main_image03.svg" alt="" class="uk-align-right">
                    </div>
                </div>
                <div class="uk-flex uk-flex-middle uk-flex-column-reverse uk-flex-row@m uk-margin-large-bottom">
                    <div class="uk-margin-right">
                        <h3 class="uk-text-bolder">シャキシャキとした食感と絶妙な甘さを持つ<br>
                            「鶴田町のりんご」</h3>
                        <p class="uk-margin-remove-top">青森県全体がりんごの一大生産地ですが、鶴田町もその一翼を担っています。鶴田町のりんごは、シャキッとした食感と酸味と甘味のバランスが絶妙で、国内外から高い評価を受けています。品種も豊富で、さまざまな料理やスイーツに利用され、地元の人々に愛されています。</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_about_main_image04.svg" alt="" class="uk-align-right">
                    </div>
                    <div class="uk-margin-left uk-margin-bottom">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_about_main_image05.png" alt="" class="uk-width-expand">
                    </div>
                </div>
                <div class="uk-flex uk-flex-middle uk-flex-column uk-flex-row@m uk-margin-large-bottom">
                    <div class="uk-margin-bottom uk-margin-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_about_main_image06.png" alt="" class="uk-width-expand">
                    </div>
                    <div class="uk-margin-left">
                        <h3 class="uk-text-bolder">肥沃な土地と清らかな水で育まれた<br>
                            「鶴田町産の美味しいお米」</h3>
                        <p class="uk-margin-remove-top">鶴田町の広大な田んぼは、美味しいお米を生産する基盤となっています。肥沃な土壌と清らかな水に恵まれ、米作りが盛んなこの町では、良質なお米が育ち、地元の食文化の中心となっています。鶴田産のお米は、その甘みと粘りが特徴で、地元の農家が丁寧に育てた自慢の一品です。</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/page_about_main_image07.svg" alt="" class="uk-align-right">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section" id="about_main-body">
        <div class="uk-container">
            <div class="uk-grid uk-child-width-1-1 uk-child-width-1-3@s uk-grid-medium uk-grid-match uk-margin-large-bottom" uk-grid>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/page_about_main_image08.svg" alt="" class="uk-width-3-4 uk-margin-auto">
                    <h3 class="uk-text-bolder">地域住民が活き活きと生きられるまちを自らつくるハブになる！</h3>
                    <p class="uk-margin-remove-top">TSURUTA LABOが一人ひとりのパートナーになることで、鶴田町が今よりもっと魅力的で活気ある地域となることを推進します。</p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/page_about_main_image09.svg" alt="" class="uk-width-3-4 uk-margin-auto">
                    <h3 class="uk-text-bolder">多種多様な選択肢を補いあう環境を提供します！</h3>
                    <p class="uk-margin-remove-top">関わる人たち全員が自分の価値を実感しながら地域を動かしていける場所を目指します。</p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/page_about_main_image10.svg" alt="" class="uk-width-3-4 uk-margin-auto">
                    <h3 class="uk-text-bolder">関わる人たちの「もったいない」を探究し集める！</h3>
                    <p class="uk-margin-remove-top">地域住民が自分自身や地域の価値に気づき、それぞれの価値がマッチングされることで課題解決に近づき、持続的な活性化が図られると考えます。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section uk-background-default" id="about_main-footer">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder">
                <span>
                    <div class="uk-navbar-subtitle">- operating company -</div>運営会社概要
                </span>
            </h2>
            <div class="uk-margin-auto">
                <div class="uk-width-1-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/page_about_main_image11.svg" alt="" class="uk-width-expand">
                </div>
            </div>
            <div>
                <div class="uk-flex uk-flex-gap uk-flex-column uk-flex-row@m uk-flex-between uk-border-solid uk-padding">
                    <div class="uk-width-1-1 uk-width-1-6@m">会社名</div>
                    <div class="uk-width-expand">一般社団法人もったいない研究所</div>
                </div>
                <div class="uk-flex uk-flex-gap uk-flex-column uk-flex-row@m uk-flex-between uk-border-solid uk-padding">
                    <div class="uk-width-1-1 uk-width-1-6@m">登記住所</div>
                    <div class="uk-width-expand">鶴田町大字鶴田字前田10-6</div>
                </div>
                <div class="uk-flex uk-flex-gap uk-flex-column uk-flex-row@m uk-flex-between uk-border-solid uk-padding">
                    <div class="uk-width-1-1 uk-width-1-6@m">事務所所在地</div>
                    <div class="uk-width-expand">鶴田町大字妙堂崎字杉元75 1階運営室</div>
                </div>
                <div class="uk-flex uk-flex-gap uk-flex-column uk-flex-row@m uk-flex-between uk-border-solid uk-padding">
                    <div class="uk-width-1-1 uk-width-1-6@m">電話番号</div>
                    <div class="uk-width-expand">0173-26-5888（FAX兼）</div>
                </div>
                <div class="uk-flex uk-flex-gap uk-flex-column uk-flex-row@m uk-flex-between uk-border-solid uk-padding">
                    <div class="uk-width-1-1 uk-width-1-6@m">メールアドレス</div>
                    <div class="uk-width-expand">mottainai.research@gmail.com</div>
                </div>
                <div class="uk-flex uk-flex-gap uk-flex-column uk-flex-row@m uk-flex-between uk-border-solid uk-padding">
                    <div class="uk-width-1-1 uk-width-1-6@m">代表者</div>
                    <div class="uk-width-expand">岡 詩子</div>
                </div>
                <div class="uk-flex uk-flex-gap uk-flex-column uk-flex-row@m uk-flex-between uk-border-solid uk-padding">
                    <div class="uk-width-1-1 uk-width-1-6@m">設立</div>
                    <div class="uk-width-expand">令和6年</div>
                </div>
                <div class="uk-flex uk-flex-gap uk-flex-column uk-flex-row@m uk-flex-between uk-border-solid uk-padding">
                    <div class="uk-width-1-1 uk-width-1-6@m">事業内容</div>
                    <div class="uk-width-expand">地域づくりに資する活動（イベントの企画実施、施設の運営、スモールビジネスの創業や地域活動発起のアドバイス、個々人が精神的環境的に豊かに暮らす為の探求のサポート等）</div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>