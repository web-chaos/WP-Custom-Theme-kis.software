<section class="how-work">
    <div class="how-work__container2">
        <h2 class="title how-work__title"><?php echo get_sub_field( 'title' ); ?></h2>
        <?php if ( have_rows( 'cards' ) ) { ?>
            <div class="how-work__slider swiper">
                <div class="swiper-wrapper">
                    <?php while ( have_rows( 'cards' ) ) { the_row(); ?>
                        <div class="swiper-slide">
                            <div class="how-work-card">
                                <div class="how-work-card__top">
                                    <?php if ( get_sub_field( 'icon' ) ) { ?>
                                        <div class="how-work-card__icon-top">
                                            <img src="<?php the_sub_field( 'icon' ); ?>" alt="<?php echo get_sub_field( 'title' ); ?>" />
                                        </div>
                                    <?php } ?>
                                    <h3 class="how-work-card__title"><?php echo get_sub_field( 'title' ); ?></h3>
                                    <div class="how-work-card__descr">
                                        <?php if( get_sub_field( 'description' ) ) { ?>
                                            <p><?php echo get_sub_field( 'description' ); ?></p>
                                        <?php } ?>
                                        <?php if( get_sub_field( 'small_description' ) ){ ?>
                                        <small>
                                            <p><?php echo get_sub_field( 'small_description' ); ?></p>
                                        </small>
                                        <?php } ?>
                                    </div>
                                    <?php if( get_sub_field( 'bonus_text' ) ){ ?>
                                        <div class="how-work-card__bonus">
                                            <h4><?php echo esc_html__( 'Bonus', 'kiss' ); ?></h4>
                                            <div class="how-work-card__bonus-row">
                                                <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/how/price.svg" alt="Price">
                                                <p><?php echo get_sub_field( 'bonus_text' ); ?><br class="softbreak"></p>
                                            </div>
                                        </div>
                                    <?php } ?>                                    
                                </div>
                                <?php if ( have_rows( 'list' ) ) { ?>
                                    <div class="how-work-card__bottom">
                                        <ul class="how-work-card__list">
                                            <?php while ( have_rows( 'list' ) ) { the_row(); ?>
                                                <li>
                                                    <div class="how-work-card__icon">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/how/arrow.svg" alt="">
                                                    </div>
                                                    <p><?php echo get_sub_field( 'list_item_text' ); ?></p>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="how-work__navigation navigation">
                    <div class="navigation__arrows">
                        <button class="navigation__arrow how-work__prev">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.4034 12.2978C17.6459 12.2978 17.8884 12.3872 18.0798 12.5786C18.45 12.9487 18.45 13.5614 18.0798 13.9315L11.0092 21.0021L18.0798 28.0727C18.45 28.4428 18.45 29.0554 18.0798 29.4255C17.7097 29.7957 17.0971 29.7957 16.727 29.4255L8.97993 21.6785C8.60981 21.3084 8.60981 20.6958 8.97993 20.3257L16.727 12.5786C16.9184 12.3872 17.1609 12.2978 17.4034 12.2978Z" />
                                <path d="M9.87251 20.0446L31.3524 20.0446C31.8756 20.0446 32.3096 20.4785 32.3096 21.0018C32.3096 21.525 31.8756 21.959 31.3524 21.959L9.87251 21.959C9.34924 21.959 8.9153 21.525 8.9153 21.0018C8.9153 20.4785 9.34924 20.0446 9.87251 20.0446Z" />
                            </svg>
                        </button>
                        <button class="navigation__arrow how-work__next">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.62 29.7022C23.3775 29.7022 23.135 29.6128 22.9436 29.4214C22.5735 29.0513 22.5735 28.4386 22.9436 28.0685L30.0142 20.9979L22.9436 13.9273C22.5735 13.5572 22.5735 12.9446 22.9436 12.5745C23.3137 12.2043 23.9263 12.2043 24.2965 12.5745L32.0435 20.3215C32.4136 20.6916 32.4136 21.3042 32.0435 21.6743L24.2965 29.4214C24.105 29.6128 23.8625 29.7022 23.62 29.7022Z" />
                                <path d="M31.1509 21.9554H9.67108C9.1478 21.9554 8.71387 21.5215 8.71387 20.9982C8.71387 20.475 9.1478 20.041 9.67108 20.041H31.1509C31.6742 20.041 32.1081 20.475 32.1081 20.9982C32.1081 21.5215 31.6742 21.9554 31.1509 21.9554Z" />
                            </svg>
                        </button>
                    </div>
                    <div class="navigation__pagination how-work__pagination">
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>