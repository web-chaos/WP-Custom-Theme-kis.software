<section class="s-related-services-slider">
    <div class="s-related-services-slider__container3">
        <h2 class="title"><?php echo get_sub_field( 'title' ); ?></h2>
		
        <?php if ( have_rows( 'slider' ) ) { ?>
            <div class="s-related-services-slider__slider swiper">
                <div class="s-related-services-slider__wrapper swiper-wrapper">
                    <?php while ( have_rows( 'slider' ) ) { the_row(); ?>
                        <?php $link = get_sub_field( 'link' ); ?>
                        <?php if ( $link ) { ?>                            
                            <div class="s-related-services-slider__slide swiper-slide">
                                <div class="s-related-services-slider__item">
                                    <div class="s-related-services-slider__item-top">
                                        <h4 class="s-related-services-slider__item-title">
                                            <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo get_sub_field( 'title' ); ?></a>
                                        </h4>
                                        <div class="s-related-services-slider__item-text"><?php echo get_sub_field( 'description' ); ?></div>
                                    </div>
                                    <div class="s-related-services-slider__item-bottom">
                                        <div class="s-related-services-slider__item-row">
                                            <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="s-related-services-slider__item-link">
                                                <svg>
                                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow-link"></use>
                                                </svg>
                                            </a>
                                            <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="s-button"><?php echo esc_html( $link['title'] ); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?> 
                </div>
                <div class="s-related-services-slider__navigation navigation">
                    <div class="navigation__arrows">
                        <button class="navigation__arrow s-related-services-slider__prev">
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow1"></use>
                            </svg>
                        </button>
                        <button class="navigation__arrow s-related-services-slider__next">
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow2"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="navigation__pagination-circle s-related-services-slider__pagination">
                    </div>
                </div>
            </div>
		<?php } ?>
    </div>
</section>


				