<section class="works section">
    <div class="works__container-big">
        <div class="section__decor-block">
            <h2 class="section__left-title">
                <?php echo get_sub_field( 'title' ); ?>
            </h2>
            <div class="section__image">
                <svg data-animate2 width="101" height="306" viewBox="0 0 101 306" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M36.5 64.8516L8.80747 113.104C5.32987 119.163 3.5 126.028 3.5 133.014V237.852" stroke="#0075FF" stroke-width="2.5" />
                    <path d="M37 126.352L85.7843 175.136C93.2857 182.637 97.5 192.811 97.5 203.42V258.352" stroke="#0075FF" stroke-width="2.5" />
                    <path d="M36 0.351562L36 295.352" stroke="#0075FF" stroke-width="3.13335" />
                    <path d="M4.04539 242.421C5.17502 242.421 6.09077 241.51 6.09077 240.386C6.09077 239.263 5.17502 238.352 4.04539 238.352C2.91575 238.352 2 239.263 2 240.386C2 241.51 2.91575 242.421 4.04539 242.421Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                    <path d="M97.0454 262.421C98.175 262.421 99.0908 261.51 99.0908 260.386C99.0908 259.263 98.175 258.352 97.0454 258.352C95.9158 258.352 95 259.263 95 260.386C95 261.51 95.9158 262.421 97.0454 262.421Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                    <path d="M35.5 304.352C37.9853 304.352 40 302.337 40 299.852C40 297.366 37.9853 295.352 35.5 295.352C33.0147 295.352 31 297.366 31 299.852C31 302.337 33.0147 304.352 35.5 304.352Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
        <h2 class="section__mob-title">
            <?php echo get_sub_field( 'title' ); ?>
        </h2>
        <div class="works__wrap">
            <?php $select_projects = get_sub_field( 'select_projects' ); ?>
			<?php if ( $select_projects ) { ?>
                <div class="works__slider swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ( $select_projects as $post ) { ?>
                            <?php setup_postdata( $post ); ?>
                            <div class="swiper-slide">
                                <?php get_template_part( 'template-parts/content', 'project' ); ?>
                            </div>
                        <?php } ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <div class="works__row">
                        <div class="navigation__arrows">
                            <button class="navigation__arrow works__prev">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.4034 12.2978C17.6459 12.2978 17.8884 12.3872 18.0798 12.5786C18.45 12.9487 18.45 13.5614 18.0798 13.9315L11.0092 21.0021L18.0798 28.0727C18.45 28.4428 18.45 29.0554 18.0798 29.4255C17.7097 29.7957 17.0971 29.7957 16.727 29.4255L8.97993 21.6785C8.60981 21.3084 8.60981 20.6958 8.97993 20.3257L16.727 12.5786C16.9184 12.3872 17.1609 12.2978 17.4034 12.2978Z" />
                                    <path d="M9.87251 20.0446L31.3524 20.0446C31.8756 20.0446 32.3096 20.4785 32.3096 21.0018C32.3096 21.525 31.8756 21.959 31.3524 21.959L9.87251 21.959C9.34924 21.959 8.9153 21.525 8.9153 21.0018C8.9153 20.4785 9.34924 20.0446 9.87251 20.0446Z" />
                                </svg>
                            </button>
                            <button class="navigation__arrow works__next">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.62 29.7022C23.3775 29.7022 23.135 29.6128 22.9436 29.4214C22.5735 29.0513 22.5735 28.4386 22.9436 28.0685L30.0142 20.9979L22.9436 13.9273C22.5735 13.5572 22.5735 12.9446 22.9436 12.5745C23.3137 12.2043 23.9263 12.2043 24.2965 12.5745L32.0435 20.3215C32.4136 20.6916 32.4136 21.3042 32.0435 21.6743L24.2965 29.4214C24.105 29.6128 23.8625 29.7022 23.62 29.7022Z" />
                                    <path d="M31.1509 21.9554H9.67108C9.1478 21.9554 8.71387 21.5215 8.71387 20.9982C8.71387 20.475 9.1478 20.041 9.67108 20.041H31.1509C31.6742 20.041 32.1081 20.475 32.1081 20.9982C32.1081 21.5215 31.6742 21.9554 31.1509 21.9554Z" />
                                </svg>
                            </button>
                        </div>
                        <?php $link = get_sub_field( 'link' ); ?>
                        <?php $term = get_term_by( 'id', $link, 'projects' ); ?>
                        <?php if ( $term ) { ?>
                            <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="works__link">
                                <svg width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 22.3516L25 15.8516L19 9.35156" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6 15.3516H24" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span><?php echo esc_html__( 'More projects', 'kiss' ); ?></span>
                            </a>
                        <?php } ?>
                    </div>
                </div>
			<?php } ?>
        </div>
    </div>
</section>	