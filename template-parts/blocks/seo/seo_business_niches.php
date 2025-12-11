<section class="s-business-niches">
    <div class="s-business-niches__container3">
        <h2 class="title">
            <?php echo get_sub_field( 'title' ); ?>
        </h2>
        <?php if( get_sub_field( 'description' ) ){ ?>
            <div class="s-business-niches__description"><?php echo get_sub_field( 'description' ); ?></div>
        <?php } ?>
        <?php if ( have_rows( 'list' ) ) { ?>
            <div class="s-business-niches__slider swiper">
                <div class="s-business-niches__wrapper swiper-wrapper">
                    <?php while ( have_rows( 'list' ) ) { the_row(); ?> 
                        <?php $link = get_sub_field( 'link' ); ?>
                        <?php if ( $link ) { ?>
                            <div class="s-business-niches__slide swiper-slide">
                                <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="s-business-niches__item">
                                    <?php $icon = get_sub_field( 'icon' ); ?>
                                    <?php if ( $icon ) { ?>
                                        <div class="s-business-niches__item-icon">
                                            <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                        </div>
                                    <?php } ?>
                                    <div class="s-business-niches__item-title"><?php echo esc_html( $link['title'] ); ?></div>
                                </a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="s-business-niches__navigation navigation">
                    <div class="navigation__arrows">
                        <button class="navigation__arrow s-business-niches__prev">
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow1"></use>
                            </svg>
                        </button>
                        <button class="navigation__arrow s-business-niches__next">
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow2"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="navigation__pagination-circle s-business-niches__pagination">
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>