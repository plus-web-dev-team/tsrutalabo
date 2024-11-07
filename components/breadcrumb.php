<div class="uk-flex uk-flex-between uk-flex-middle@m uk-flex-column uk-flex-row@m">
    <ul class="uk-breadcrumb">
        <li><a href="<?php echo home_url(); ?>">ホーム</a></li>

        <?php if (is_home()) : ?>
            <!-- 投稿一覧ページ（home.php）の場合 -->
            <li><span><?php echo get_the_title(get_option('page_for_posts')); ?></span></li>

        <?php elseif (is_page() && !is_front_page()) : ?>
            <!-- 通常のページの場合 -->
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

        <?php elseif (is_single()) : ?>
            <!-- 投稿ページ（single.php）の場合 -->
            <li><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"><?php echo get_the_title(get_option('page_for_posts')); ?></a></li>
            <li><span><?php the_title(); ?></span></li>

        <?php elseif (is_category()) : ?>
            <!-- カテゴリーページの場合にのみカテゴリー階層を表示 -->
            <?php
            $category = get_queried_object();
            if ($category->parent) {
                $cat_parents = get_category_parents($category->parent, true, '</li><li>');
                echo '<li>' . $cat_parents . '</li>';
            }
            ?>
            <li><span><?php single_cat_title(); ?></span></li>

        <?php elseif (is_search()) : ?>
            <!-- 検索結果ページの場合 -->
            <li><span>検索結果</span></li>

        <?php endif; ?>
    </ul>

    <div class="uk-text-right">
        <?php if (is_search()) : ?>
            <p class="uk-heading-medium uk-text-bolder uk-margin-remove uk-text-uppercase">
                <?php echo esc_html("検索結果"); ?>
            </p>
        <?php else : ?>
            <?php
            // 投稿一覧ページや通常のページ、投稿ページのIDを取得
            if (is_home()) {
                $page_id = get_option('page_for_posts');
            } elseif (is_single() || is_page()) {
                $page_id = get_the_ID();
            }

            // カテゴリーページの場合はカテゴリー名を、他の場合はデフォルトのタイトルを表示
            if (is_category()) {
                $page_title = single_cat_title('', false);
            } else {
                $page_title = get_post_meta($page_id, 'pagetitle', true) ?: get_the_title($page_id);
            }

            $sub_title = get_post_meta($page_id, 'subtitle', true);
            ?>

            <p class="uk-heading-medium uk-text-bolder uk-margin-remove uk-text-uppercase">
                <?php echo esc_html($page_title); ?>
            </p>

            <?php if ($sub_title) : ?>
                <h1 class="uk-text-default uk-margin-remove">
                    <?php echo esc_html($sub_title); ?>
                </h1>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>