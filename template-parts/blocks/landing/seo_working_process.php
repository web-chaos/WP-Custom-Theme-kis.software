<section id="working-process" class="s-working-process">
    <div class="s-working-process__container3">
        <div class="s-working-process__top">
            <h2 class="title"><?php echo get_sub_field( 'title' ); ?></h2>
            <?php if( get_sub_field( 'description' ) ){ ?>
                <div class="s-working-process__description"><?php echo get_sub_field( 'description' ); ?></div>
            <?php } ?>
        </div>
        
        <div class="s-working-process__nav-top">

            <?php if ( have_rows( 'list' ) ) { ?>
                <?php $stepCount = 0; while ( have_rows( 'list' ) ) { the_row(); $stepCount++; ?>
                    <div class="s-working-process__nav-top-item">
                        <div class="s-working-process__nav-top-item-digit">
                            <?php echo $stepCount; ?>
                        </div>
                        <div class="s-working-process__nav-top-item-name">
                            <?php echo get_sub_field( 'step_field' ); ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
            
            
            
        </div>

        <div class="s-working-process__row">

            <?php if ( have_rows( 'list' ) ) { ?>
                <div class="s-working-process__nav-left">
                    <?php $countProcess = 0; while ( have_rows( 'list' ) ) { the_row(); $countProcess++; ?>
                        <div class="s-working-process__nav-left-item ">
                            <div class="s-working-process__nav-left-digit">
                                <?php echo $countProcess; ?>
                            </div>
                            <div class="s-working-process__nav-left-name">
                                <?php echo get_sub_field( 'step_field' ); ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

            <div class="s-working-process__content">
                <?php if ( have_rows( 'list' ) ) { ?>
                    <div class="s-working-process__slider swiper">
                        <div class="s-working-process__wrapper swiper-wrapper">
                            <?php while ( have_rows( 'list' ) ) { the_row(); ?>                                 
                                <div class="s-working-process__slide swiper-slide">
                                    <div class="s-working-process__item">
                                        <div class="s-working-process__item-top">
                                            <div class="s-working-process__item-title">
                                                <span><?php echo get_sub_field( 'step_field' ); ?></span> <?php echo get_sub_field( 'title' ); ?>
                                            </div>
                                            <div class="s-working-process__item-text"><?php echo get_sub_field( 'description' ); ?></div>
                                        </div>
                                        <div class="s-working-process__item-bottom">
                                            <div class="s-working-process__item-time">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/s-image/time.svg" alt=""> <span><?php echo esc_html__( 'Time to deliver', 'kiss' ); ?></span>
                                            </div>
                                            <div class="s-working-process__item-days">
                                                <?php echo esc_html__( '~', 'kiss' ); ?> <?php echo get_sub_field( 'time_to_deliver' ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="s-working-process__navigation navigation">
            <div class="navigation__arrows">
                <button class="navigation__arrow s-working-process__prev">
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow1"></use>
                    </svg>
                </button>
                <button class="navigation__arrow s-working-process__next">
                    <svg>
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow2"></use>
                    </svg>
                </button>
            </div>
            <div class="navigation__pagination-circle s-working-process__pagination"></div>
        </div>
    </div>
</section>