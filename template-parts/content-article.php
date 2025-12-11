<article class="article">
    <a href="<?php the_permalink(); ?>" class="article__row">
        <div class="article__image-ibg _pc">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        </div>
        <div class="article__content">
            <div class="article__top">
                <h4 class="article__title"><?php the_title(); ?></h4>
                <div class="article__labels">
                    <time><?php echo get_the_date('d.m.Y'); ?></time>
                    <?php
                    $categories = get_the_category();
                    if ($categories) {
                        $first_category = $categories[0]; ?>
                        <span><?php echo esc_html($first_category->name); ?></span>
                    <?php } ?>
                </div>
                <div class="article__image-ibg _mob">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
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
                <div class="article__text">
                    <p>
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
                    </p>
                </div>
            </div>
            <div class="article__bottom">
                <div class="article__link link">
                    <p class="link__icon">
                        <svg>
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow-link"></use>
                        </svg>
                    </p>
                    <p class="link__text"><?php echo esc_html__( 'read more', 'kiss' ); ?></p>
                </div>
            </div>
        </div>
    </a>
</article>