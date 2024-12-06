<div class="uk-width-3-4 uk-margin-auto">
    <div class="uk-form-horizontal uk-margin-large">
        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-company"><span class="uk-label-mute uk-margin-small-right">任意</span>企業・団体名</label>
            <div class="uk-form-controls" style="margin:0;">
                [text your-company id:your-company class:uk-input placeholder "株式会社〇〇"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-c-address"><span class="uk-label-mute uk-margin-small-right">任意</span>企業・団体のご住所</label>
            <div class="uk-form-controls" style="margin:0;">
                [text your-c-address id:your-c-address class:uk-input placeholder "青森県北津軽郡鶴田町大字妙堂崎字杉元75"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-c-email"><span class="uk-label-mute uk-margin-small-right">任意</span>企業・団体のメールアドレス</label>
            <div class="uk-form-controls" style="margin:0;">
                [email your-c-email id:your-c-email class:uk-input placeholder "sample@sample.com"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-c-tel"><span
                        class="uk-label-mute uk-margin-small-right">任意</span>企業・団体の電話番号</label>
            <div class="uk-form-controls" style="margin:0;">
                [tel your-c-tel id:your-c-tel class:uk-input placeholder "01234567890"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-name"><span class="uk-label uk-margin-small-right">必須</span>参加される方のお名前</label>
            <div class="uk-form-controls" style="margin:0;">
                [text* your-name id:your-name class:uk-input placeholder "田中太郎"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-furigana"><span
                        class="uk-label uk-margin-small-right">必須</span>参加される方のフリガナ</label>
            <div class="uk-form-controls" style="margin:0;">
                [text* your-furigana id:your-furigana class:uk-input placeholder "タナカタロウ"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-address"><span
                        class="uk-label uk-margin-small-right">必須</span>参加される方のご住所</label>
            <div class="uk-form-controls uk-form-controls-text" style="margin:0;">
                [text* your-address id:your-address class:uk-input placeholder "青森県北津軽郡鶴田町大字妙堂崎字杉元75"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-email"><span class="uk-label uk-margin-small-right">必須</span>参加される方のメールアドレス</label>
            <div class="uk-form-controls" style="margin:0;">
                [email* your-email id:your-email class:uk-input placeholder "sample@sample.com"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-tel"><span class="uk-label uk-margin-small-right">必須</span>参加される方の携帯番号</label>
            <div class="uk-form-controls" style="margin:0;">
                [tel* your-tel id:your-tel class:uk-input placeholder "01234567890"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-date"><span
                        class="uk-label uk-margin-small-right">必須</span>参加される方の生年月日</label>
            <div class="uk-form-controls" style="margin:0;">
                [date* your-date id=:your-date]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <div><span class="uk-label uk-margin-small-right">必須</span>参加される方の性別</div>
            <div class="uk-form-controls uk-form-controls-text" style="margin:0;">
                [radio gender-type id:gender-type use_label_element "男性" "女性" "答えたくない"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="select-work"><span class="uk-label uk-margin-small-right">必須</span>業種</label>
            <div class="uk-form-controls" style="margin:0;">
                [select* select-work class:uk-select first_as_label "選択してください" "製造業" "小売業・卸売業" "サービス業"
                "情報通信業" "金融業・保険業" "建設業" "運輸・物流業" "農林水産業" "医療・福祉" "教育・学術研究"
                "エネルギー業" "不動産業" "エンターテイメント" "公共サービス・行政" "その他特殊業種"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="check-tsuruta"><span class="uk-label uk-margin-small-right">必須</span>鶴田町とのご縁がございましたら、以下から当てはまるものをお聞かせください。</label>
            <div class="uk-form-controls" style="margin:0;">
                [checkbox* check-tsuruta free_text use_label_element "鶴田町出身" "過去に鶴田町に住んでいた"
                "配偶者が鶴田町出身" "両親や子が鶴田町在住、もしくは出身" "鶴田町に訪れたことがある" "鶴田町に興味がある"
                "その他"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-text"><span class="uk-label uk-margin-small-right">必須</span>鶴田町及び周辺地域へのUIJターンや多拠点生活等を検討している場合は、具体的にどのような働き方で、いつ頃を考えているかお聞かせください。</label>
            <div class="uk-form-controls" style="margin:0;">
                [textarea* your-text class:uk-textarea placeholder "（例）現在の職場にテレワークで勤めながら、1年以内に移住予定。"]
                [/textarea*]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-reason"><span class="uk-label uk-margin-small-right">必須</span>本プログラムに応募した理由や動機を教えてください。</label>
            <div class="uk-form-controls" style="margin:0;">
                [checkbox* your-reason free_text use_label_element "人材不足のため地方で採用したい"
                "既存顧客が青森県にあるため、その近隣にサテライトオフィスを持ちたい" "新たな市場を開拓したい"
                "震災時などの事業継続計画（BCP）の一環で地方にオフィスを持ちたい" "地方創生や地域活性化に興味がある"
                "その他"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-thoughts"><span class="uk-label uk-margin-small-right">必須</span>サテライトオフィス展開の意向や目的、鶴田町や青森県への想いなどがもしあれば、自由に記述してください。</label>
            <div class="uk-form-controls" style="margin:0;">
                [textarea* your-thoughts class:uk-textarea]
                [/textarea*]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-inquiry"><span class="uk-label uk-margin-small-right">必須</span>その他、ご質問や事務局へ伝えておきたい事柄がありましたら教えてください。</label>
            <div class="uk-form-controls" style="margin:0;">
                [textarea* your-inquiry class:uk-textarea]
                [/textarea*]
            </div>
        </div>
    </div>

    <div class="uk-margin-auto uk-width-fit uk-margin-large-bottom uk-text-left">
        <div>
            <p>【申込にあたっての注意事項】※下記の注意事項について、確認・同意した上でチェックしてください。</p>
            <ul class="uk-list">
                <li class="uk-margin-remove">・観光目的の参加はできません。</li>
                <li class="uk-margin-remove">
                    ・モニターツアー終了後、鶴田町からアンケートへの回答を求められる場合がございますので、ご協力をお願いいたします。
                </li>
                <li class="uk-margin-remove">
                    ・東京駅⇔新青森駅の公共交通機関のチケットの手配は事務局が行います。手配完了後、出発時間帯の変更等はできませんので、あらかじめご了承ください。
                </li>
                <li class="uk-margin-remove">・会社等から出張旅費が支給される場合は、ツアーに参加できません。</li>
                <li class="uk-margin-remove">
                    ・災害や感染症等の理由で、ツアーを中止または中断することがありますので、あらかじめご了承ください。
                </li>
                <li class="uk-margin-remove">
                    ・ご提供いただいた個人情報は、個人情報保護法及び<a
                            href="https://tsurutalabo.com/privacy/" target="_blank"
                            rel="noopener noreferrer"
                            class="uk-border-solid uk-link-reset">TSURUTA LABOプライバシーポリシー</a>に基づき適切に管理し、本事業及び当町へのサテライトオフィス誘致活動以外には使用いたしません。
                </li>
            </ul>
            <div class="uk-text-center">[acceptance acceptance-agreement] 注意事項について確認し、同意の上参加申込みします
                [/acceptance]
            </div>
        </div>
        <div class="uk-width-3-4@m uk-margin-auto uk-text-center">
            [submit class:uk-button class:uk-button-default class:btn_confirm "申し込み"]
        </div>
    </div>
</div>