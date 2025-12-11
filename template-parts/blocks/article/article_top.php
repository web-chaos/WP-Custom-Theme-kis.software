<div class="article2__top top-article2">
    <div class="top-article2__content">
        <?php
        
        $author_id = get_the_author_meta('ID');
        $first_name = get_the_author_meta('first_name', $author_id);
        $last_name = get_the_author_meta('last_name', $author_id);
        
        $user_acf_prefix = 'user_';
        $user_id_prefixed = $user_acf_prefix . $author_id;

        if( $author_id ){ ?>
            <div class="top-article2__user">
                <?php if ( get_field( 'profile_photo', $user_id_prefixed ) ) { ?>
                    <div class="top-article2__user-icon">
                        <img src="<?php the_field( 'profile_photo', $user_id_prefixed ); ?>" alt="<?php echo esc_html($first_name . ' ' . $last_name); ?>" />
                    </div>
                <?php } ?>
                <span><?php echo esc_html($first_name . ' ' . $last_name); ?></span>
            </div>
        <?php } ?>
        <div class="top-article2__head">
            <div class="top-article2__left">
                <?php
                    $categories = get_the_category();
                    if ($categories) {
                        $first_category = $categories[0]; ?>
                    <div class="top-article2__tag">
                        #<?php echo esc_html($first_category->name); ?>
                    </div>
                <?php } ?>
                <time class="top-article2__date">
                    <?php echo get_the_date('d.m.Y'); ?>
                </time>
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
            



        </div>
        <h1 data-da=".top-article2__content,991,1" class="top-article2__title"><?php the_title(); ?></h1>
        <div class="top-article2__text"><?php echo get_sub_field( 'description' ); ?></div>
    </div>
    <?php if ( get_sub_field( 'image' ) ) { ?>
        <div data-da=".top-article2__content,991,3" class="top-article2__image-ibg">
            <img src="<?php the_sub_field( 'image' ); ?>" alt="<?php the_title(); ?>" />
        </div>
    <?php } ?>
</div>