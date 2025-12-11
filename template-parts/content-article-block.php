<article class="s-related-blogs__item">
    <a href="<?php the_permalink(); ?>" class="s-related-blogs__item-image ibg">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    </a>
    <div class="s-related-blogs__item-content">
        <div class="s-related-blogs__item-top">
            <a href="" class="s-related-blogs__icon">
                <svg>
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow-link"></use>
                </svg>
            </a>
            <h4 class="s-related-blogs__item-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h4>
        </div>
        <div class="s-related-blogs__item-text">
            <?php
                if (have_rows('blocks')) {
                    while (have_rows('blocks')) {
                        the_row();
                        if (get_row_layout() == 'article_top' && get_sub_field('description')) {
                            echo wp_trim_words(wp_strip_all_tags(get_sub_field('description')), 38, '...');
                        }
                    }
                }
            ?>
        </div>
    </div>
</article>