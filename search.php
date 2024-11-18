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

    <section class="uk-section">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder uk-position-relative">
                <span>
                    <div class="uk-navbar-subtitle">- search results -</div>検索結果
                </span>
            </h2>

            <?php if (have_posts()) : ?>
                <div class="uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                    <?php while (have_posts()) : the_post(); ?>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover uk-card-body">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="uk-card-media-top">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium', ['class' => 'uk-border-rounded']); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <h3 class="uk-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                <a href="<?php the_permalink(); ?>" class="uk-button uk-button-text">Read more</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <div class="uk-text-center uk-margin-large-top">
                    <ul class="uk-pagination uk-flex-center uk-margin">
                        <?php
                        global $wp_query;
                        $pagination_links = paginate_links(array(
                            'total'        => $wp_query->max_num_pages, // $wp_queryのページ数
                            'current'      => max(1, get_query_var('paged')), // 現在のページ
                            'prev_text'    => '<span uk-pagination-previous></span>',
                            'next_text'    => '<span uk-pagination-next></span>',
                            'type'         => 'array', // リンクを配列で取得
                        ));

                        if (!empty($pagination_links)) {
                            foreach ($pagination_links as $link) {
                                // 現在のページかどうかをチェックして 'uk-active' を追加
                                if (strpos($link, 'current') !== false) {
                                    echo '<li class="uk-active">' . $link . '</li>';
                                } else {
                                    echo '<li>' . $link . '</li>';
                                }
                            }
                        }
                        ?>
                    </ul>
                </div>

            <?php else : ?>
                <p class="uk-text-lead uk-text-center">検索条件に一致する投稿が見つかりませんでした。</p>
            <?php endif; ?>
        </div>
    </section>
    <?php
    include get_template_directory() . '/components/cta.php';
    ?>
    <?php
    include get_template_directory() . '/components/banner.php';
    ?>
</main>

<?php get_footer(); ?>