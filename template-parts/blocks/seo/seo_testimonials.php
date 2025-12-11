<section class="s-testimonials">
    <div class="s-testimonials__container3">
        <h2 class="title">
            <?php echo get_sub_field( 'title' ); ?>
        </h2>
        <div class="s-testimonials__wrap">
            <?php $testimonials = get_sub_field( 'testimonials' ); ?>
			<?php if ( $testimonials ) { ?>
                <div class="s-testimonials__slider swiper">
                    <div class="s-testimonials__wrapper swiper-wrapper">
                        <?php foreach ( $testimonials as $post ) { ?>
                            <?php setup_postdata( $post ); ?>
                            <div class="s-testimonials__slide swiper-slide">
                                <div class="s-testimonials__item">
                                    <div class="s-testimonials__item-top">
                                        <div class="s-testimonials__item-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/s-image/quote.svg">
                                        </div>
                                        <div class="s-testimonials__item-text">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <div class="s-testimonials__item-bottom">
                                        <div class="s-testimonials__item-user">
                                            <?php $user_photo = get_field( 'user_photo' ); ?>
                                            <?php if ( $user_photo ) { ?>
                                                <div class="s-testimonials__item-user-avatar ibg">
                                                    <img src="<?php echo esc_url( $user_photo['url'] ); ?>" alt="<?php echo esc_attr( $user_photo['alt'] ); ?>" />
                                                </div>
                                            <?php } ?>
                                            <div class="s-testimonials__item-user-content">
                                                <div class="s-testimonials__item-user-name">
                                                    <?php echo get_field( 'user_name' ); ?>
                                                </div>
                                                <div class="s-testimonials__item-user-position">
                                                    <?php echo get_field( 'user_position' ); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php wp_reset_postdata(); ?>

                        </div>
                    <div class="s-testimonials__navigation navigation">
                        <div class="navigation__arrows">
                            <button class="navigation__arrow s-testimonials__prev">
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow1"></use>
                                </svg>
                            </button>
                            <button class="navigation__arrow s-testimonials__next">
                                <svg>
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow2"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="navigation__pagination-circle s-testimonials__pagination"></div>
                    </div>
                </div>
			<?php } ?>
        </div>
    </div>
</section>



			