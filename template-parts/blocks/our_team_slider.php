<section class="team section">
    <div class="team__container-big">
        <div class="section__decor-block">
            <h2 class="section__left-title">
                <?php echo get_sub_field( 'title' ); ?>
            </h2>
            <div class="section__image">
                <svg data-animate2 width="123" height="413" viewBox="0 0 123 413" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M44.5 48.3516L10.1244 103.098C6.12274 109.471 4 116.843 4 124.369V305.852" stroke="#0075FF" stroke-width="2.5" />
                    <path d="M45 0.351562V377.352" stroke="#0075FF" stroke-width="3.13335" />
                    <path d="M4.04539 310.421C5.17502 310.421 6.09077 309.51 6.09077 308.386C6.09077 307.263 5.17502 306.352 4.04539 306.352C2.91575 306.352 2 307.263 2 308.386C2 309.51 2.91575 310.421 4.04539 310.421Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                    <path d="M45 176.352L76.7843 208.136C84.2857 215.637 88.5 225.811 88.5 236.42V406.852" stroke="#0075FF" stroke-width="2.5" />
                    <path d="M88 289.852L107.784 309.636C115.286 317.137 119.5 327.311 119.5 337.92V363.352" stroke="#0075FF" stroke-width="2.5" />
                    <path d="M88.0454 410.921C89.175 410.921 90.0908 410.01 90.0908 408.886C90.0908 407.763 89.175 406.852 88.0454 406.852C86.9158 406.852 86 407.763 86 408.886C86 410.01 86.9158 410.921 88.0454 410.921Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                    <path d="M119.045 366.921C120.175 366.921 121.091 366.01 121.091 364.886C121.091 363.763 120.175 362.852 119.045 362.852C117.916 362.852 117 363.763 117 364.886C117 366.01 117.916 366.921 119.045 366.921Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                    <path d="M44.5 381.352C46.9853 381.352 49 379.337 49 376.852C49 374.366 46.9853 372.352 44.5 372.352C42.0147 372.352 40 374.366 40 376.852C40 379.337 42.0147 381.352 44.5 381.352Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                </svg>

            </div>
        </div>
        <h2 class="section__mob-title">
            <?php echo get_sub_field( 'title' ); ?>
        </h2>
        <div class="team__wrap">
            <?php $team_slider = get_sub_field( 'team_slider' ); ?>
			<?php if ( $team_slider ) { ?>
                <div class="team__slider swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ( $team_slider as $post_ids ) { ?>
                            <div class="swiper-slide">
                                <a href="<?php echo get_permalink( $post_ids ); ?>" class="team-card">
                                    <div class="team-card__image-ibg">
                                        <img src="<?php echo get_the_post_thumbnail_url($post_ids, 'full'); ?>" alt="<?php echo get_the_title( $post_ids ); ?>">
                                    </div>
                                    <div class="team-card__content">
                                        <div class="team-card__title">
                                            <?php echo get_the_title( $post_ids ); ?>
                                        </div>
                                        <div class="team-card__row">
                                            <div class="team-card__info">
                                                <?php echo get_field( 'position', $post_ids ); ?><br>
                                                <?php echo get_field( 'country', $post_ids ); ?>
                                            </div>
                                            <span class="works-card__link">
                                                <svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22.8472 18.8116C22.6758 18.9831 22.4411 19.0914 22.1704 19.0914C21.6469 19.0914 21.2138 18.6582 21.2138 18.1348L21.2138 8.13543L11.2144 8.13545C10.691 8.13545 10.2578 7.70226 10.2578 7.17883C10.2578 6.6554 10.691 6.22222 11.2144 6.22222L22.1704 6.2222C22.6938 6.2222 23.127 6.65538 23.127 7.17882L23.127 18.1348C23.127 18.4055 23.0187 18.6402 22.8472 18.8116Z" />
                                                    <path d="M22.6947 8.00808L7.50614 23.1966C7.13613 23.5666 6.52245 23.5666 6.15244 23.1966C5.78243 22.8266 5.78243 22.2129 6.15244 21.8429L21.341 6.65438C21.711 6.28437 22.3247 6.28437 22.6947 6.65438C23.0647 7.02439 23.0647 7.63807 22.6947 8.00808Z" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="works__row">
                        <div class="navigation__arrows">
                            <button class="navigation__arrow team__prev">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.4034 12.2978C17.6459 12.2978 17.8884 12.3872 18.0798 12.5786C18.45 12.9487 18.45 13.5614 18.0798 13.9315L11.0092 21.0021L18.0798 28.0727C18.45 28.4428 18.45 29.0554 18.0798 29.4255C17.7097 29.7957 17.0971 29.7957 16.727 29.4255L8.97993 21.6785C8.60981 21.3084 8.60981 20.6958 8.97993 20.3257L16.727 12.5786C16.9184 12.3872 17.1609 12.2978 17.4034 12.2978Z" />
                                    <path d="M9.87251 20.0446L31.3524 20.0446C31.8756 20.0446 32.3096 20.4785 32.3096 21.0018C32.3096 21.525 31.8756 21.959 31.3524 21.959L9.87251 21.959C9.34924 21.959 8.9153 21.525 8.9153 21.0018C8.9153 20.4785 9.34924 20.0446 9.87251 20.0446Z" />
                                </svg>
                            </button>
                            <button class="navigation__arrow team__next">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.62 29.7022C23.3775 29.7022 23.135 29.6128 22.9436 29.4214C22.5735 29.0513 22.5735 28.4386 22.9436 28.0685L30.0142 20.9979L22.9436 13.9273C22.5735 13.5572 22.5735 12.9446 22.9436 12.5745C23.3137 12.2043 23.9263 12.2043 24.2965 12.5745L32.0435 20.3215C32.4136 20.6916 32.4136 21.3042 32.0435 21.6743L24.2965 29.4214C24.105 29.6128 23.8625 29.7022 23.62 29.7022Z" />
                                    <path d="M31.1509 21.9554H9.67108C9.1478 21.9554 8.71387 21.5215 8.71387 20.9982C8.71387 20.475 9.1478 20.041 9.67108 20.041H31.1509C31.6742 20.041 32.1081 20.475 32.1081 20.9982C32.1081 21.5215 31.6742 21.9554 31.1509 21.9554Z" />
                                </svg>
                            </button>
                        </div>
                        <?php $link = get_sub_field( 'link' ); ?>
                        <?php if ( $link ) { ?>
                            <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="works__link">
                                <svg width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 22.3516L25 15.8516L19 9.35156" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6 15.3516H24" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span><?php echo esc_html( $link['title'] ); ?></span>
                            </a>
                        <?php } ?>
                    </div>
                </div>
			<?php } ?>
        </div>
    </div>
</section>