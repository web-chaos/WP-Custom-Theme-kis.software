<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kiss
 */

?>



	<footer class="footer">
		<div class="footer__container">
			<div class="footer__wrap">
				<div class="footer__top">
					<div class="footer__left">
						<a href="" class="footer__logo">
							<?php if ( get_field( 'footer_logo_white', 'option' ) ) { ?>
								<img class="white" src="<?php echo get_field( 'footer_logo_white', 'option' ); ?>" />
							<?php } ?>
							<?php if ( get_field( 'footer_logo_black', 'option' ) ) : ?>
								<img class="dark" src="<?php the_field( 'footer_logo_black', 'option' ); ?>" />
							<?php endif ?>
						</a>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-2',
									'menu_class'	 => 'footer__list',
									'container'		 => false,
								)
							);
						?>
					</div>
					<div class="footer__right">
						<ul class="footer__socials menu__socials">
							<?php if( get_field( 'facebook', 'option' ) ){ ?>
								<li>
									<a href="<?php echo get_field( 'facebook', 'option' ); ?>" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/img/svg/facebook.svg" alt="">
									</a>
								</li>
							<?php } ?>
							<?php if( get_field( 'instagram', 'option' ) ){ ?>
								<li>
									<a href="<?php echo get_field( 'instagram', 'option' ); ?>" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/img/svg/instagram.svg" alt="">
									</a>
								</li>
							<?php } ?>
							<?php if( get_field( 'linkedin', 'option' ) ){ ?>
								<li>
									<a href="<?php echo get_field( 'linkedin', 'option' ); ?>" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/img/svg/linkedin.svg" alt="">
									</a>
								</li>
							<?php } ?>
						</ul>
						<div class="footer__row">
							<div class="footer__info">
								<div class="footer__time">
								<?php
									$date = new DateTime("now", new DateTimeZone('Europe/Kiev'));
									echo $date->format('H:i');
								?>
								</div>
								<div class="footer__descr">
									<?php echo esc_html__( 'We will promptly respond to your requests from 9:00 - 18:00 local time.', 'kiss' ); ?>
								</div>
								<ul class="footer__phones">
									<?php if( get_field( 'business_phone_ua', 'option' ) ){ ?>
										<li class="address-ua">
											<p><?php echo esc_html__( 'Business Phone UA:', 'kiss' ); ?></p>
											<?php if( pll_current_language() === 'en' ) { ?>
												<a href="#" class="show-contact"><?php echo esc_html__( 'Show phone number', 'kiss' ); ?></a>
											<?php } ?>
											<a class="<?php if( pll_current_language() === 'en' ) echo "tel-hidden"; ?>" href="tel:<?php echo get_field( 'business_phone_ua', 'option' ); ?>"><?php echo get_field( 'business_phone_ua', 'option' ); ?></a>
										</li>
									<?php } ?>
									<?php if( get_field( 'business_phone_usa', 'option' ) ){ ?>
										<li>
											<p><?php echo esc_html__( 'Business Phone USA:', 'kiss' ); ?></p>
											<a href="tel:<?php echo get_field( 'business_phone_usa', 'option' ); ?>"><?php echo get_field( 'business_phone_usa', 'option' ); ?></a>
										</li>
									<?php } ?>
								</ul>
							</div>
							<div class="footer__adress">
								<ul>
									<?php if( get_field( 'kiev_office', 'option' ) ){ ?>
										<li>
											<h4><?php echo esc_html__( 'Kiev office', 'kiss' ); ?></h4>
											<?php if( pll_current_language() === 'en' ) { ?>
												<a href="#" class="show-contact"><?php echo esc_html__( 'Show address', 'kiss' ); ?></a>
											<?php } ?>
											<p class="<?php if( pll_current_language() === 'en' ) echo "tel-hidden"; ?>"><?php echo get_field( 'kiev_office', 'option' ); ?></p>
										</li>
									<?php } ?>
									<?php if( get_field( 'address', 'option' ) ){ ?>
										<li>
											<h4><?php echo esc_html__( 'Address', 'kiss' ); ?></h4>
											<p><?php echo get_field( 'address', 'option' ); ?></p>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="footer__mob-info footer-mob">
							<div class="footer-mob__block">
								<?php if( get_field( 'business_phone_usa', 'option' ) ){ ?>
									<div class="footer-mob__item">
										<h4><?php echo esc_html__( 'Business Phone USA:', 'kiss' ); ?></h4>
										<p class="footer-mob__value">
											<a href="tel:<?php echo get_field( 'business_phone_usa', 'option' ); ?>"><?php echo get_field( 'business_phone_usa', 'option' ); ?></a>
										</p>
									</div>
								<?php } ?>
								<?php if( get_field( 'address', 'option' ) ){ ?>
									<div class="footer-mob__item">
										<h4 class="mb-8"><?php echo esc_html__( 'Address', 'kiss' ); ?></h4>
										<p class="footer-mob__value">
											<?php echo get_field( 'address', 'option' ); ?>
										</p>
									</div>
								<?php } ?>
							</div>
							<div class="footer-mob__block">
								<?php if( get_field( 'business_phone_ua', 'option' ) ){ ?>
									<div class="footer-mob__item blue">
										<h4><?php echo esc_html__( 'Business Phone UA:', 'kiss' ); ?></h4>
										<p class="footer-mob__value">
											<a href="tel:<?php echo get_field( 'business_phone_ua', 'option' ); ?>"><?php echo get_field( 'business_phone_ua', 'option' ); ?></a>
										</p>
									</div>
								<?php } ?>
								<?php if( get_field( 'kiev_office', 'option' ) ){ ?>
									<div class="footer-mob__item yellow">
										<h4 class="mb-8"><?php echo esc_html__( 'Kiev office', 'kiss' ); ?></h4>
										<p class="footer-mob__value">
											<?php echo get_field( 'kiev_office', 'option' ); ?>
										</p>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="footer__bottom">
					<div class="footer__copy"><?php bloginfo('name'); ?>, <?php echo esc_html__( 'LLC Copyright', 'kiss' ); ?> <?php echo date('Y'); ?></div>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-3',
								'menu_class'	 => 'footer__bottom-list',
								'container'		 => false,
							)
						);
					?>
				</div>
			</div>
		</div>
	</footer>

	<div class="scroll-top js-scroll-top">
		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="" stroke="cuurentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="18" y1="11" x2="12" y2="5"></line>
			<line x1="6" y1="11" x2="12" y2="5"></line></svg>
	</div>

	<div class="messenger">
		<div id="messenger-links" class="messenger-links">
			<?php if( get_field( 'telegram', 'option' ) ){ ?>
				<a href="<?php echo get_field( 'telegram', 'option' ); ?>" target="_blank" class="contact-soc__link">
					<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/icons/telegram.svg" alt="telegram">
				</a>
			<?php } ?>
			<?php if( get_field( 'whatsapp', 'option' ) ){ ?>
				<a href="<?php echo get_field( 'whatsapp', 'option' ); ?>" target="_blank" class="contact-soc__link">
					<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/icons/whatsapp.svg" alt="whatsapp">
				</a>
			<?php } ?>
			<?php if( get_field( 'viber', 'option' ) ){ ?>
				<a href="<?php echo get_field( 'viber', 'option' ); ?>" target="_blank" class="contact-soc__link">
					<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/icons/viber.svg" alt="viber">
				</a>
			<?php } ?>
			<?php if( get_field( 'messenger', 'option' ) ){ ?>
				<a href="<?php echo get_field( 'messenger', 'option' ); ?>" target="_blank" class="contact-soc__link">
					<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/icons/messenger.svg" alt="messenger">
				</a>
			<?php } ?>
		</div>
		<div title="Чат с менеджером" class="messenger-btn">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icon_chat.svg" alt="<?php echo esc_html__( 'Chat with manager', 'kiss' ); ?>">
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
