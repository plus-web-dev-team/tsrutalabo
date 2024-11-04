<?php get_header(); ?>
<main>
    <section class="uk-section uk-background-default" id="news">
        <div class="uk-container uk-container-small">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder">
                <span>
                    <div class="uk-navbar-subtitle">- news -</div>お知らせ
                </span>
            </h2>
            <?php
            $args = array(
                'posts_per_page' => 5,
                'post_status'    => 'publish',
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('uk-flex uk-flex-middle uk-margin-medium-bottom uk-border-dashed'); ?>>
                        <div class="uk-width-auto uk-margin-medium-right">
                            <p><?php echo get_the_date('Y.m.d'); ?></p>
                        </div>
                        <div class="uk-width-expand">
                            <p>
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
        </div>
        <div class="uk-align-center uk-text-center">
            <a class="uk-button uk-button-default uk-text-uppercase uk-border-rounded" href="<?php echo home_url("news"); ?>">read more</a>
        </div>
    </section>

</main>
<?php get_footer(); ?>