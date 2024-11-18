<section class="uk-section uk-background-default" id="links">
    <div class="uk-container">
        <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder">
            LINKS
        </h2>

        <div class="uk-grid uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>
            <?php
            $args = array(
                'post_type' => 'add_link_banner',
                'posts_per_page' => 6,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                echo '<!-- Posts found -->';
                while ($query->have_posts()) : $query->the_post();
                    $post_id = get_the_ID();

                    $banner_image = get_field('banner_image', $post_id);
                    $banner_link = get_field('banner_link', $post_id);

                    $banner_image_url = is_array($banner_image) ? $banner_image['url'] : $banner_image;
                    $banner_link_url = is_array($banner_link) ? $banner_link['url'] : $banner_link;
            ?>
                    <div>
                        <?php if ($banner_link_url) : ?>
                            <a href="<?php echo esc_url($banner_link_url); ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo esc_url($banner_image_url ?: get_template_directory_uri() . '/images/links_noimage.jpg'); ?>" alt="<?php the_title(); ?>" class="uk-width-expand">
                            </a>
                        <?php else : ?>
                            <img src="<?php echo esc_url($banner_image_url ?: get_template_directory_uri() . '/images/links_noimage.jpg'); ?>" alt="<?php the_title(); ?>" class="uk-width-expand">
                        <?php endif; ?>
                    </div>
            <?php endwhile;
            else :
                echo '<!-- No posts found in add_link_banner -->';
            endif;
            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>