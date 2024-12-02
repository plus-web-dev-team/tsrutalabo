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
                [email* your-c-email id:your-c-email class:uk-input placeholder "sample@sample.com"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-c-tel"><span class="uk-label-mute uk-margin-small-right">任意</span>企業・団体の電話番号</label>
            <div class="uk-form-controls" style="margin:0;">
                [tel* your-c-tel id:your-c-tel class:uk-input placeholder "01234567890"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-name"><span class="uk-label uk-margin-small-right">必須</span>参加される方のお名前</label>
            <div class="uk-form-controls" style="margin:0;">
                [text* your-name id:your-name class:uk-input placeholder "田中太郎"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-furigana"><span class="uk-label uk-margin-small-right">必須</span>参加される方のフリガナ</label>
            <div class="uk-form-controls" style="margin:0;">
                [text* your-furigana id:your-furigana class:uk-input placeholder "タナカタロウ"]
            </div>
        </div>

        <div class="uk-margin uk-flex uk-flex-column">
            <label for="your-address"><span class="uk-label uk-margin-small-right">必須</span>参加される方のご住所</label>
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
            <label for="your-date"><span class="uk-label uk-margin-small-right">必須</span>参加される方の生年月日</label>
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
                [select* select-work class:uk-select first_as_label "選択してください" "製造業" "小売業・卸売業" "サービス業" "情報通信業" "金融業・保険業" "建設業" "運輸・物流業" "農林水産業" "医療・福祉" "教育・学術研究" "エネルギー業" "不動産業" "エンターテイメント" "公共サービス・行政" "その他特殊業種"]
            </div>
        </div>
    </div>
    <div class="uk-margin-auto uk-width-fit uk-margin-large-bottom uk-text-left">
        <div>[acceptance acceptance id:acceptance] <a href="/privacy" class="uk-border-solid uk-link-reset">プライバシーポリシー</a>に同意する [/acceptance]</div>
        <div>[acceptance acceptance-confirm id:acceptance-confirm] 入力内容を確認しました。 [/acceptance]</div>
        <div class="uk-width-3-4@m uk-margin-auto uk-text-center">
            [submit class:uk-button class:uk-button-default "送信"]
        </div>
    </div>
</div>