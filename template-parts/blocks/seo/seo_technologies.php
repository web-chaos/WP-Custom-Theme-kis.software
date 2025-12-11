<section class="s-expertise">
    <div class="s-expertise__container3">
        <div class="s-expertise__row">
            <div class="s-expertise__left">
                <div class="s-expertise__top">
                    <?php $icon = get_sub_field( 'icon' ); ?>
                    <?php if ( $icon ) { ?>
                        <div class="s-expertise__icon">
                            <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                        </div>
                    <?php } ?>
                    <h2 class="s-expertise__title">
                        <?php echo get_sub_field( 'technologies_title' ); ?>
                    </h2>
                </div>
            </div>

            <?php if ( have_rows( 'technologies_logos' ) ) { ?>
                <div class="s-expertise__right">
                    
                    <div class="s-expertise__slider swiper">
                        <div class="s-expertise__wrapper swiper-wrapper">

                            <?php 
                                $counter = 0;
                                $slide_open = false;

                                while ( have_rows( 'technologies_logos' ) ) { 
                                    the_row();

                                    if ($counter % 9 === 0) {
                                        if ($slide_open) { ?>
                                            </div></div>
                                        <?php } ?>
                                        <div class="s-expertise__slide swiper-slide"><div class="s-expertise__items"> 
                                        <?php
                                        $slide_open = true;
                                    } ?>
                                    
                                    <div class="s-expertise__item">
                                        <?php $icon = get_sub_field( 'icon' ); ?>
                                        <?php if ( $icon ) { ?>
                                            <div class="s-expertise__image">
                                                <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" class="images-theme" />
                                            </div>
                                        <?php } ?>

                                        <div class="s-expertise__small-title">
                                            <?php echo get_sub_field( 'title' ); ?>
                                        </div>
                                    </div>

                                    <?php 
                                    $counter++;
                                }

                                if ($slide_open) { ?>
                                    </div></div>
                                <?php } ?>
                        </div>
                        <div class="s-expertise__navigation navigation">
                            <div class="navigation__arrows">
                                <button class="navigation__arrow s-expertise__prev">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow1"></use>
                                    </svg>
                                </button>
                                <button class="navigation__arrow s-expertise__next">
                                    <svg>
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow2"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="navigation__pagination-circle s-expertise__pagination">
                            </div>
                        </div>
                    </div>

                    <div class="s-expertise__items pc">

                        <?php while ( have_rows( 'technologies_logos' ) ) { the_row(); ?>
                            <?php $icon = get_sub_field( 'icon' ); ?>
                            
                            <div class="s-expertise__item">
                                <?php if ( $icon ) { ?>
                                    <div class="s-expertise__image">
                                        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" class="images-theme"/>
                                    </div>
                                <?php } ?>
                                
                                <div class="s-expertise__small-title">
                                    <?php echo get_sub_field( 'title' ); ?>
                                </div>
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>






    