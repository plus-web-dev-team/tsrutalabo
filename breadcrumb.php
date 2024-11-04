<div class="uk-flex uk-flex-between uk-flex-middle@m uk-flex-column uk-flex-row@m">
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
        <p class="uk-heading-medium uk-text-bolder uk-margin-remove uk-text-uppercase"><?php echo esc_html(get_post_meta(get_the_ID(), 'pagetitle', true)); ?></p>
        <?php if (get_post_meta(get_the_ID(), 'subtitle', true)) : ?>
            <h1 class="uk-text-default uk-margin-remove"><?php echo esc_html(get_post_meta(get_the_ID(), 'subtitle', true)); ?></h1>
        <?php endif; ?>
    </div>
</div>