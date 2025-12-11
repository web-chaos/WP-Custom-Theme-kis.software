<section class="expertise section">
    <div class="expertise__container-big">
<?php $stay_in_touch = get_sub_field( 'stay_in_touch' ); ?>
		<?php if ( $stay_in_touch ) { ?>
            <a href="<?php echo esc_url( $stay_in_touch['url'] ); ?>" target="<?php echo esc_attr( $stay_in_touch['target'] ); ?>" class="expertise__link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/svg/stay.svg" alt="">
                <span><?php echo esc_html( $stay_in_touch['title'] ); ?></span>
            </a>
        <?php } ?>

        <div class="section__decor-block">
            <h2 class="section__left-title">
                <?php echo get_sub_field( 'title' ); ?>
            </h2>
            <div class="section__image">
                <svg data-animate2 width="99" height="430" viewBox="0 0 99 430" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path data-animate-path d="M44.5 213L18.1447 239.355C8.76783 248.732 3.5 261.45 3.5 274.711V294.5" stroke="#0075FF" stroke-width="2.5" />
                    <path data-animate-path d="M92 82L63.5178 104.486C51.5073 113.968 44.5 128.428 44.5 143.73V342" stroke="#0075FF" stroke-width="2.5" />
                    <path data-animate-path d="M44.0454 346.57C45.175 346.57 46.0908 345.659 46.0908 344.535C46.0908 343.411 45.175 342.5 44.0454 342.5C42.9158 342.5 42 343.411 42 344.535C42 345.659 42.9158 346.57 44.0454 346.57Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                    <path data-animate-path d="M4.04539 298.57C5.17502 298.57 6.09077 297.659 6.09077 296.535C6.09077 295.411 5.17502 294.5 4.04539 294.5C2.91575 294.5 2 295.411 2 296.535C2 297.659 2.91575 298.57 4.04539 298.57Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                    <path data-animate-path d="M92 0L92 419" stroke="#0075FF" stroke-width="2.5" />
                    <path data-animate-path d="M92.5 428C94.9853 428 97 425.985 97 423.5C97 421.015 94.9853 419 92.5 419C90.0147 419 88 421.015 88 423.5C88 425.985 90.0147 428 92.5 428Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                </svg>

            </div>
        </div>
        <h2 class="section__mob-title">
            <?php echo get_sub_field( 'title' ); ?>
        </h2>
        <div class="expertise__wrap">
            <div class="expertise__top">
                <div class="expertise__left">
                    <?php $icon = get_sub_field( 'icon' ); ?>
                    <?php if ( $icon ) { ?>
                        <div class="expertise__image">
                            <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                        </div>
                    <?php } ?>
                    <h2 class="expertise__title">
                        <?php echo get_sub_field( 'technologies_title' ); ?>
                    </h2>
                </div>

                <?php $technologies_logos_images = get_sub_field( 'technologies_logos' ); ?>
                <?php if ( $technologies_logos_images ) { ?>
                    <div class="expertise__right">
                        <div class="expertise__slider swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ( $technologies_logos_images as $technologies_logos_image ){ ?>
                                    <div class="swiper-slide">
                                        <div class="expertise__card">
                                            <img src="<?php echo esc_url( $technologies_logos_image['url'] ); ?>" width="<?php echo esc_attr( $technologies_logos_image['width'] ); ?>" height="<?php echo esc_attr( $technologies_logos_image['height'] ); ?>" alt="<?php echo esc_attr( $technologies_logos_image['alt'] ); ?>" class="images-theme"/>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="navigation__arrows">
                                <button class="navigation__arrow expertise__prev">
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.4034 12.2978C17.6459 12.2978 17.8884 12.3872 18.0798 12.5786C18.45 12.9487 18.45 13.5614 18.0798 13.9315L11.0092 21.0021L18.0798 28.0727C18.45 28.4428 18.45 29.0554 18.0798 29.4255C17.7097 29.7957 17.0971 29.7957 16.727 29.4255L8.97993 21.6785C8.60981 21.3084 8.60981 20.6958 8.97993 20.3257L16.727 12.5786C16.9184 12.3872 17.1609 12.2978 17.4034 12.2978Z" />
                                        <path d="M9.87251 20.0446L31.3524 20.0446C31.8756 20.0446 32.3096 20.4785 32.3096 21.0018C32.3096 21.525 31.8756 21.959 31.3524 21.959L9.87251 21.959C9.34924 21.959 8.9153 21.525 8.9153 21.0018C8.9153 20.4785 9.34924 20.0446 9.87251 20.0446Z" />
                                    </svg>
                                </button>
                                <button class="navigation__arrow expertise__next">
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.62 29.7022C23.3775 29.7022 23.135 29.6128 22.9436 29.4214C22.5735 29.0513 22.5735 28.4386 22.9436 28.0685L30.0142 20.9979L22.9436 13.9273C22.5735 13.5572 22.5735 12.9446 22.9436 12.5745C23.3137 12.2043 23.9263 12.2043 24.2965 12.5745L32.0435 20.3215C32.4136 20.6916 32.4136 21.3042 32.0435 21.6743L24.2965 29.4214C24.105 29.6128 23.8625 29.7022 23.62 29.7022Z" />
                                        <path d="M31.1509 21.9554H9.67108C9.1478 21.9554 8.71387 21.5215 8.71387 20.9982C8.71387 20.475 9.1478 20.041 9.67108 20.041H31.1509C31.6742 20.041 32.1081 20.475 32.1081 20.9982C32.1081 21.5215 31.6742 21.9554 31.1509 21.9554Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php if ( have_rows( 'technologies_page' ) ) { ?>
                <div class="expertise__bottom">
                    <div class="  expertise-case__slider swiper">
                        <div class="swiper-wrapper">
                            <?php while ( have_rows( 'technologies_page' ) ) { the_row(); ?>
                                <?php $link = get_sub_field( 'link' ); ?>
                                <?php if ( $link ) { ?>
                                <div class="swiper-slide">
                                    <a href="<?php echo esc_url( $link['url'] ); ?>" class="expertise-case__item">
                                        <?php $icon = get_sub_field( 'icon' ); ?>
                                        <?php if ( $icon ) { ?>
                                            <div class="expertise-case__icon">
                                                <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                            </div>
                                        <?php } ?>
                                        <div class="expertise-case__text">
                                            <p><?php echo esc_html( $link['title'] ); ?></p>
                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <div class="navigation__arrows">
                            <button class="navigation__arrow expertise-case__prev">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.4034 12.2978C17.6459 12.2978 17.8884 12.3872 18.0798 12.5786C18.45 12.9487 18.45 13.5614 18.0798 13.9315L11.0092 21.0021L18.0798 28.0727C18.45 28.4428 18.45 29.0554 18.0798 29.4255C17.7097 29.7957 17.0971 29.7957 16.727 29.4255L8.97993 21.6785C8.60981 21.3084 8.60981 20.6958 8.97993 20.3257L16.727 12.5786C16.9184 12.3872 17.1609 12.2978 17.4034 12.2978Z" />
                                    <path d="M9.87251 20.0446L31.3524 20.0446C31.8756 20.0446 32.3096 20.4785 32.3096 21.0018C32.3096 21.525 31.8756 21.959 31.3524 21.959L9.87251 21.959C9.34924 21.959 8.9153 21.525 8.9153 21.0018C8.9153 20.4785 9.34924 20.0446 9.87251 20.0446Z" />
                                </svg>
                            </button>
                            <button class="navigation__arrow expertise-case__next">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.62 29.7022C23.3775 29.7022 23.135 29.6128 22.9436 29.4214C22.5735 29.0513 22.5735 28.4386 22.9436 28.0685L30.0142 20.9979L22.9436 13.9273C22.5735 13.5572 22.5735 12.9446 22.9436 12.5745C23.3137 12.2043 23.9263 12.2043 24.2965 12.5745L32.0435 20.3215C32.4136 20.6916 32.4136 21.3042 32.0435 21.6743L24.2965 29.4214C24.105 29.6128 23.8625 29.7022 23.62 29.7022Z" />
                                    <path d="M31.1509 21.9554H9.67108C9.1478 21.9554 8.71387 21.5215 8.71387 20.9982C8.71387 20.475 9.1478 20.041 9.67108 20.041H31.1509C31.6742 20.041 32.1081 20.475 32.1081 20.9982C32.1081 21.5215 31.6742 21.9554 31.1509 21.9554Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>