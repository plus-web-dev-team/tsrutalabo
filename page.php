<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <main>
        <section class="uk-section uk-page-header">
            <div class="uk-container">
                <div class="uk-flex uk-flex-between uk-flex-middle">
                    <ul class="uk-breadcrumb">
                        <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                        <?php if (is_page() && !is_front_page()) : ?>
                            <?php
                            $ancestors = get_post_ancestors($post);
                            $ancestors = array_reverse($ancestors);
                            foreach ($ancestors as $ancestor) :
                                $ancestor_url = get_permalink($ancestor);
                                $ancestor_title = get_the_title($ancestor);
                            ?>
                                <li><a href="<?php echo $ancestor_url; ?>"><?php echo $ancestor_title; ?></a></li>
                            <?php endforeach; ?>
                            <li><span><?php the_title(); ?></span></li>
                        <?php endif; ?>
                    </ul>
                    <div class="uk-text-right">
                        <h1 class="uk-heading-medium uk-text-bold uk-margin-remove uk-text-uppercase"><?php the_title(); ?></h1>
                        <?php if (get_post_meta(get_the_ID(), 'subtitle', true)) : ?>
                            <p class="uk-margin-remove"><?php echo esc_html(get_post_meta(get_the_ID(), 'subtitle', true)); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="uk-section">
            <div class="uk-container">
                <?php the_content(); ?>
            </div>
        </section>
    </main>
<?php endwhile; ?>
<?php get_footer(); ?>