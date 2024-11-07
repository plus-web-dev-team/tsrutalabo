<?php get_header(); ?>

<main>
    <section class="uk-section uk-section-large uk-flex uk-flex-middle" style="min-height: 80vh;">
        <div class="uk-container uk-text-center">
            <h1 class="uk-heading-xlarge">404</h1>
            <p class="uk-text-lead">お探しのページは見つかりませんでした。</p>
            <p>申し訳ありませんが、リクエストされたページは存在しないか、削除された可能性があります。</p>

            <a href="<?php echo home_url(); ?>" class="uk-button uk-button-default uk-button-large">ホームに戻る</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>