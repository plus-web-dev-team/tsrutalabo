<?php get_header(); ?>
<main>
    <section class="uk-section uk-page-header">
        <div class="uk-container">
            <?php
            require_once get_template_directory() . '/components/breadcrumb.php';
            if (function_exists('display_breadcrumb')) {
                display_breadcrumb();
            }
            ?>
        </div>
    </section>

    <section class="uk-section" id="news">
        <div class="uk-container uk-container-small">
            <header class="uk-text-center">
                <h2 class="uk-heading uk-text-uppercase uk-text-bolder">
                    <span>
                        <div class="uk-navbar-subtitle">- news -</div>お知らせ
                    </span>
                </h2>
            </header>
            <?php
            // 現在のページ番号を取得
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'posts_per_page' => 10, // 1ページの表示件数
                'post_status'    => 'publish',
                'paged'          => $paged, // 現在のページ番号を設定
            );
            $query = new WP_Query($args);

            // 投稿カウンタを初期化
            $post_counter = 0;

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $post_counter++; // 投稿カウンタをインクリメント
            ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('uk-flex uk-flex-column uk-flex-row@s uk-flex-left uk-flex-middle@s uk-margin-medium-bottom uk-border-dashed uk-padding-small'); ?>>
                        <div class="uk-width-auto uk-grid uk-grid-small uk-margin-bottom uk-margin-medium-right">
                            <?php if ($post_counter <= 3) : ?>
                                <!-- 最新の3件に "new" ラベルを表示 -->
                                <p><span class="uk-label uk-label-default">new</span></p>
                            <?php endif; ?>
                            <p>
                                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                            </p>
                        </div>
                        <div class="uk-width-expand uk-margin-bottom">
                            <p class="uk-margin-remove">
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
            wp_reset_postdata();
            ?>

            <!-- UIkit ページネーション -->
            <div class="uk-text-center">
                <ul class="uk-pagination uk-flex-center uk-margin">
                    <?php
                    $pagination_links = paginate_links(array(
                        'total'        => max($query->max_num_pages, 2), // 常に2ページ以上のリンクを表示
                        'current'      => $paged,
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
        </div>
    </section>

</main>
<?php get_footer(); ?>