<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
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

        <?php the_content(); ?>

    </main>
<?php endwhile; ?>
<?php
include get_template_directory() . '/components/cta.php';
?>
<?php
include get_template_directory() . '/components/banner.php';
?>
<?php get_footer(); ?>