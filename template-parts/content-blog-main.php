<div class="blog-main__row">
    <div class="blog-main__content">
        <h2 class="blog-main__title2 title"><?php the_title(); ?></h2>
        <div class="blog-main__head">
            <?php
            $categories = get_the_category();
            if ($categories) {
                $first_category = $categories[0]; ?>
                <div class="blog-main__tag">
                    #<?php echo esc_html($first_category->name); ?>
                </div>
            <?php } ?>
            <time class="blog-main__date"><?php echo get_the_date('d.m.Y'); ?></time>
        </div>
        <div itemscope itemtype="https://schema.org/Product">
            <div class="rating " itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                <span itemprop="name" style="display:none;"><?php the_title(); ?></span>
                <div class="rating__body">
                    <div class="rating__active"></div>
                    <div class="rating__items">
                        <input type="radio" class="rating__item" value="1" name="rating">
                        <input type="radio" class="rating__item" value="2" name="rating">
                        <input type="radio" class="rating__item" value="3" name="rating">
                        <input type="radio" class="rating__item" value="4" name="rating">
                        <input type="radio" class="rating__item" value="5" name="rating">
                    </div>
                </div>
                <div class="rating__value" itemprop="ratingValue"><?php the_field( 'rating' ); ?></div>
            </div>
        </div>
        <div class="blog-main__text">
            <p>
            <?php
                if (have_rows('blocks')) {
                    while (have_rows('blocks')) {
                        the_row();
                        if (get_row_layout() == 'article_top' && get_sub_field('description')) {
                            echo wp_trim_words(wp_strip_all_tags(get_sub_field('description')), 50, '...');
                        }
                    }
                }
            ?>
            </p>
        </div>
        <a href="<?php the_permalink(); ?>" class="blog-main__link link">
            <span class="link__icon">
                <svg>
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow-link"></use>
                </svg>
            </span>
            <span class="link__text"><?php echo esc_html__( 'read more', 'kiss' ); ?></span>
        </a>
    </div>
    <div data-da=".blog-main__content,768,2" class="blog-main__image-ibg">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    </div>
</div>