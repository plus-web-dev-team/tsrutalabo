<?php
/*
Template Name: 利用者紹介
*/
get_header();
?>

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

    <section class="uk-section" id="residence_header">
        <div class="uk-container">
            <h2 class="uk-heading uk-text-center uk-text-uppercase uk-text-bolder uk-position-relative">
                <span>
                    <div class="uk-navbar-subtitle">- member of a cool crew -</div>多彩な分野で活躍する貸オフィス利用者の皆さま
                </span>
            </h2>
            <div class="uk-margin-auto uk-width-fit uk-margin-large-bottom">
                <div class="uk-width-3-4@m uk-margin-auto">
                    <p>TSURUTA LABOでは、様々な分野で活躍する法人や個人、クリエイターが集い、活動しています。<br>ここでは、現在利用している個性豊かな皆さまをご紹介します。</p>
                </div>
            </div>
            <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-small" uk-grid>
                <?php
                $custom_posts = new WP_Query(array(
                    'post_type' => 'add_residence', // カスタム投稿のスラッグ
                    'posts_per_page' => 8 // 表示する投稿数を8つに制限
                ));

                if ($custom_posts->have_posts()) :
                    while ($custom_posts->have_posts()) : $custom_posts->the_post();
                ?>
                        <div>
                            <div class="uk-margin-bottom uk-position-relative">
                                <?php $image = get_field("custom_image");
                                $custom_alt = get_field("custom_alt"); // ACFで設定されたカスタムaltを取得
                                if (!empty($image)) : ?>
                                    <div class="uk-image-ornament"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr(!empty($custom_alt) ? $custom_alt : $image['alt']); ?>" /></div>
                                <?php else : ?>
                                    <div class="uk-image-ornament"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/page_residence_header_noimage.svg'); ?>" alt="デフォルト画像" /></div>
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if ($industry = get_field("custom_industry")) : ?>
                                    <span class="uk-label-default"><?php echo esc_html($industry); ?></span>
                                <?php endif; ?>
                                <?php if ($name = get_field("custom_name")) : ?>
                                    <p><?php echo esc_html($name); ?></p>
                                <?php endif; ?>
                                <?php if ($description = get_field("custom_description")) : ?>
                                    <p class="uk-margin-remove-top"><?php echo esc_html($description); ?></p>
                                <?php endif; ?>
                                <div class="uk-margin-small-bottom">
                                    <?php if ($site = get_field("custom_site")) : ?>
                                        <a href="<?php echo esc_url($site); ?>" uk-icon="icon: world" target="_blank" rel="noopener noreferrer"></a>
                                    <?php endif; ?>
                                    <?php if ($twitter = get_field("custom_twitter")) : ?>
                                        <a href="<?php echo esc_url($twitter); ?>" uk-icon="icon: twitter" target="_blank" rel="noopener noreferrer"></a>
                                    <?php endif; ?>
                                    <?php if ($facebook = get_field("custom_facebook")) : ?>
                                        <a href="<?php echo esc_url($facebook); ?>" uk-icon="icon: facebook" target="_blank" rel="noopener noreferrer"></a>
                                    <?php endif; ?>
                                    <?php if ($instagram = get_field("custom_instagram")) : ?>
                                        <a href="<?php echo esc_url($instagram); ?>" uk-icon="icon: instagram" target="_blank" rel="noopener noreferrer"></a>
                                    <?php endif; ?>
                                </div>
                                <?php if ($google_map = get_field("custom_google_map")) : ?>
                                    <p><a href="<?php echo esc_url($google_map); ?>" class="uk-border-solid">Google Map</a></p>
                                <?php endif; ?>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>カスタム投稿が見つかりませんでした。</p>';
                endif;
                ?>
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