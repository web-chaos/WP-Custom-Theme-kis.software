<section class="choose section">
    <div class="choose__container-big">
        <div class="section__decor-block">
            <h2 class="section__left-title">
                <?php echo get_sub_field( 'title' ); ?>
            </h2>
            <div class="section__image">
                <svg data-animate2 width="118" height="375" viewBox="0 0 118 375" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M68 54.3516L44.8873 77.4643C36.6357 85.7159 32 96.9074 32 108.577V231.352" stroke="#0075FF" stroke-width="2.5" />
                    <path d="M32.0454 235.921C33.175 235.921 34.0908 235.01 34.0908 233.886C34.0908 232.763 33.175 231.852 32.0454 231.852C30.9158 231.852 30 232.763 30 233.886C30 235.01 30.9158 235.921 32.0454 235.921Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                    <path d="M4.04539 190.921C5.17502 190.921 6.09077 190.01 6.09077 188.886C6.09077 187.763 5.17502 186.852 4.04539 186.852C2.91575 186.852 2 187.763 2 188.886C2 190.01 2.91575 190.921 4.04539 190.921Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                    <path d="M114.045 298.421C115.175 298.421 116.091 297.51 116.091 296.386C116.091 295.263 115.175 294.352 114.045 294.352C112.916 294.352 112 295.263 112 296.386C112 297.51 112.916 298.421 114.045 298.421Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                    <path d="M67.5 373.352C69.9853 373.352 72 371.337 72 368.852C72 366.366 69.9853 364.352 67.5 364.352C65.0147 364.352 63 366.366 63 368.852C63 371.337 65.0147 373.352 67.5 373.352Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                    <path d="M31.5 120.852L17.3873 134.964C9.13571 143.216 4.5 154.407 4.5 166.077V186.852" stroke="#0075FF" stroke-width="2.5" />
                    <path d="M68 0.351562L68 364.352" stroke="#0075FF" stroke-width="2.5" />
                    <path d="M69 181.352L91.4125 196.044C105.508 205.285 114 221.005 114 237.86V294.352" stroke="#0075FF" stroke-width="2.5" />
                </svg>

            </div>
        </div>
        <h2 class="section__mob-title">
            <?php echo get_sub_field( 'title' ); ?>
        </h2>
        <div class="choose__wrap">
            <?php if ( have_rows( 'slider' ) ) { ?>
            <div class="choose__slider swiper">
                <div class="swiper-wrapper">
                    <?php while ( have_rows( 'slider' ) ) { the_row(); ?>
                        <div class="swiper-slide">
                            <div class="choose__items">
                                <?php if ( have_rows( 'items' ) ) { ?>
                                    <?php while ( have_rows( 'items' ) ) { the_row(); ?>
                                        <div class="choose__item">
                                            <?php $icon = get_sub_field( 'icon' ); ?>
                                            <?php if ( $icon ) { ?>
                                                <div class="choose__icon">
                                                    <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                                </div>
                                            <?php } ?>
                                            <div class="choose__text">
                                                <?php echo get_sub_field( 'description' ); ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="navigation__arrows">
                    <button class="navigation__arrow choose__prev">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4034 12.2978C17.6459 12.2978 17.8884 12.3872 18.0798 12.5786C18.45 12.9487 18.45 13.5614 18.0798 13.9315L11.0092 21.0021L18.0798 28.0727C18.45 28.4428 18.45 29.0554 18.0798 29.4255C17.7097 29.7957 17.0971 29.7957 16.727 29.4255L8.97993 21.6785C8.60981 21.3084 8.60981 20.6958 8.97993 20.3257L16.727 12.5786C16.9184 12.3872 17.1609 12.2978 17.4034 12.2978Z" />
                            <path d="M9.87251 20.0446L31.3524 20.0446C31.8756 20.0446 32.3096 20.4785 32.3096 21.0018C32.3096 21.525 31.8756 21.959 31.3524 21.959L9.87251 21.959C9.34924 21.959 8.9153 21.525 8.9153 21.0018C8.9153 20.4785 9.34924 20.0446 9.87251 20.0446Z" />
                        </svg>
                    </button>
                    <button class="navigation__arrow choose__next">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.62 29.7022C23.3775 29.7022 23.135 29.6128 22.9436 29.4214C22.5735 29.0513 22.5735 28.4386 22.9436 28.0685L30.0142 20.9979L22.9436 13.9273C22.5735 13.5572 22.5735 12.9446 22.9436 12.5745C23.3137 12.2043 23.9263 12.2043 24.2965 12.5745L32.0435 20.3215C32.4136 20.6916 32.4136 21.3042 32.0435 21.6743L24.2965 29.4214C24.105 29.6128 23.8625 29.7022 23.62 29.7022Z" />
                            <path d="M31.1509 21.9554H9.67108C9.1478 21.9554 8.71387 21.5215 8.71387 20.9982C8.71387 20.475 9.1478 20.041 9.67108 20.041H31.1509C31.6742 20.041 32.1081 20.475 32.1081 20.9982C32.1081 21.5215 31.6742 21.9554 31.1509 21.9554Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>



