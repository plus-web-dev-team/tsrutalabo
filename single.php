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
            <div class="uk-container uk-container-small">
                <!-- 投稿内容の表示 -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile;
                endif; ?>

                <!-- UIkit ページネーション（前後の記事リンク） -->
                <div class="uk-flex uk-flex-center uk-margin-large-top">
                    <ul class="uk-pagination">
                        <li class="uk-margin-small-right">
                            <?php previous_post_link('%link', '<span uk-pagination-previous></span> 前へ'); ?>
                        </li>
                        <li><a href="<?php echo home_url("news"); ?>" class="uk-button uk-button-primary">一覧に戻る</a>
                        </li>
                        <li class="uk-margin-small-left">
                            <?php next_post_link('%link', '次へ <span uk-pagination-next></span>'); ?>
                        </li>
                    </ul>
                </div>
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