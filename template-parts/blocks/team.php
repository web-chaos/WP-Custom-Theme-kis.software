<?php $select_team = get_sub_field( 'select_team' ); ?>
<section class="team2">
    <div class="team2__container2">
        <h2 class="title team2__title"><?php echo get_sub_field( 'title' ); ?></h2>
        <div class="team2__descr">
            <p><?php echo get_sub_field( 'description' ); ?></p>
        </div>
        <?php if ( $select_team ) { ?>
					<a href="<?php echo get_permalink( $post_ids ); ?>"></a>
        <div class="team2__slider swiper">
            <div class="swiper-wrapper">
				<?php foreach ( $select_team as $post_ids ) { ?>
                    <div class="swiper-slide">
                        <div class="team2-card">
                            <?php if (has_post_thumbnail($post_ids)) { ?>
                            <div class="team2-card__image-ibg">
                                <img src="<?php echo get_the_post_thumbnail_url($post_ids, 'full'); ?>" alt="<?php echo get_the_title( $post_ids ); ?>">
                            </div>
                            <?php } ?>
                            <div class="team2-card__content">
                                <div class="team2-card__title"><?php echo get_the_title( $post_ids ); ?></div>
                                <div class="team2-card__subtitle">
                                    <?php echo get_field( 'position', $post_ids ); ?><br>
                                    <?php echo get_field( 'country', $post_ids ); ?>
                                </div>
                                <?php if( get_field( 'linkedin_link', $post_ids ) || get_field( 'facebook_link', $post_ids ) ){ ?>
                                <div class="team2-card__links">
                                    <?php if( get_field( 'linkedin_link', $post_ids ) ){ ?>
                                        <a href="<?php echo get_field( 'linkedin_link', $post_ids ); ?>">
                                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.8185 29.8258H24.6356V21.7044C24.6356 19.7677 24.5963 17.2754 21.9348 17.2754C19.2325 17.2754 18.8198 19.3827 18.8198 21.5615V29.8258H13.6369V13.125H18.6156V15.4015H18.6827C19.3783 14.089 21.07 12.7035 23.5973 12.7035C28.8488 12.7035 29.82 16.1598 29.82 20.6588L29.8185 29.8258ZM7.78312 10.8398C7.38774 10.84 6.99619 10.7622 6.6309 10.6109C6.26561 10.4596 5.93375 10.2377 5.6543 9.95801C5.37486 9.67829 5.15332 9.34621 5.00237 8.98077C4.85141 8.61534 4.77401 8.22372 4.77458 7.82833C4.77487 7.23301 4.95169 6.65114 5.28267 6.15631C5.61365 5.66148 6.08394 5.27591 6.63405 5.04836C7.18417 4.8208 7.78941 4.76149 8.37323 4.87791C8.95706 4.99434 9.49325 5.28127 9.91401 5.70243C10.3348 6.12359 10.6212 6.66006 10.737 7.244C10.8529 7.82794 10.793 8.43312 10.5649 8.98302C10.3368 9.53291 9.95079 10.0028 9.45564 10.3333C8.96049 10.6638 8.37845 10.8401 7.78312 10.8398ZM10.3819 29.8258H5.18438V13.125H10.3819V29.8258ZM32.4115 0H2.58271C1.155 0 0 1.12875 0 2.52146V32.4785C0 33.8727 1.155 35 2.58271 35H32.4071C33.8333 35 35 33.8727 35 32.4785V2.52146C35 1.12875 33.8333 0 32.4071 0H32.4115Z" />
                                            </svg>
                                        </a>
                                    <?php } ?>
                                    <?php if( get_field( 'facebook_link', $post_ids ) ){ ?>
                                        <a href="<?php echo get_field( 'facebook_link', $post_ids ); ?>">
                                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M36.9212 18.4622C36.9212 8.26489 28.6563 0 18.4606 0C8.26489 0 0 8.26489 0 18.4622C0 27.6748 6.75099 35.3119 15.5759 36.6966V23.7977H10.8896V18.4606H15.5759V14.3943C15.5759 9.76648 18.3329 7.21101 22.5484 7.21101C24.5685 7.21101 26.6809 7.57102 26.6809 7.57102V12.1142H24.3547C22.0623 12.1142 21.3469 13.5374 21.3469 14.9974V18.4622H26.467L25.6485 23.7992H21.3469V36.6981C30.1718 35.3135 36.9228 27.6763 36.9228 18.4622H36.9212Z"></path>
                                            </svg>
                                        </a>
                                    <?php } ?>

                                </div>
                                <?php } ?>
                                <div class="team2-card__text">
                                    <p>
                                        <?php echo nl2br(get_field( 'short_text', $post_ids )); ?>
                                    </p>
                                    <?php if ( have_rows( 'lists', $post_ids ) ) { ?>
                                        <ul>
                                            <?php while ( have_rows( 'lists', $post_ids ) ) { the_row(); ?>
                                                <li><?php echo get_sub_field( 'description', $post_ids ); ?></li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php } ?>
            </div>
            <div class="navigation__arrows team2__arrows">
                <button class="navigation__arrow team2__prev">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.4034 12.2978C17.6459 12.2978 17.8884 12.3872 18.0798 12.5786C18.45 12.9487 18.45 13.5614 18.0798 13.9315L11.0092 21.0021L18.0798 28.0727C18.45 28.4428 18.45 29.0554 18.0798 29.4255C17.7097 29.7957 17.0971 29.7957 16.727 29.4255L8.97993 21.6785C8.60981 21.3084 8.60981 20.6958 8.97993 20.3257L16.727 12.5786C16.9184 12.3872 17.1609 12.2978 17.4034 12.2978Z" />
                        <path d="M9.87251 20.0446L31.3524 20.0446C31.8756 20.0446 32.3096 20.4785 32.3096 21.0018C32.3096 21.525 31.8756 21.959 31.3524 21.959L9.87251 21.959C9.34924 21.959 8.9153 21.525 8.9153 21.0018C8.9153 20.4785 9.34924 20.0446 9.87251 20.0446Z" />
                    </svg>
                </button>
                <button class="navigation__arrow team2__next">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.62 29.7022C23.3775 29.7022 23.135 29.6128 22.9436 29.4214C22.5735 29.0513 22.5735 28.4386 22.9436 28.0685L30.0142 20.9979L22.9436 13.9273C22.5735 13.5572 22.5735 12.9446 22.9436 12.5745C23.3137 12.2043 23.9263 12.2043 24.2965 12.5745L32.0435 20.3215C32.4136 20.6916 32.4136 21.3042 32.0435 21.6743L24.2965 29.4214C24.105 29.6128 23.8625 29.7022 23.62 29.7022Z" />
                        <path d="M31.1509 21.9554H9.67108C9.1478 21.9554 8.71387 21.5215 8.71387 20.9982C8.71387 20.475 9.1478 20.041 9.67108 20.041H31.1509C31.6742 20.041 32.1081 20.475 32.1081 20.9982C32.1081 21.5215 31.6742 21.9554 31.1509 21.9554Z" />
                    </svg>
                </button>
            </div>
        </div>
        <?php } ?>
    </div>
</section>




			
			