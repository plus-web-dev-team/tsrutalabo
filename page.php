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
        <section class="uk-section">
            <div class="uk-container">
                <?php the_content(); ?>
            </div>
        </section>
    </main>
<?php endwhile; ?>
<?php get_footer(); ?>