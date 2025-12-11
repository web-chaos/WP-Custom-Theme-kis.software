<?php
/**
 * Template Name: Contact page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kiss
 */

get_header();
?>




	<main class="page">

        <div class="blog-main__container2">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<div id="breadcrumbs" class="article2__breadcrumbs breadcrumbs breadcrumbs__list">','</div>' );
				}
			?>
        </div>

        <section class="form form_big">
            <div class="form__container2">
                <h2 class="form__title-big title-big"><?php echo get_field( 'title' ); ?></h2>
                <div class="form__image-mob"></div>
                <div class="form__row">
                    <div class="form__main ">
                        <?php echo get_field( 'form_description' ); ?>
						<?php echo get_field( 'contact_form' ); ?>
						<div class="form__send-text js-success-sent"></div>
                    </div>
                    
                <div data-da=".form__image-mob,768,0" class="form__image">
                        <div class="footer__row">
                            <div class="footer__info">
                                <ul class="footer__phones">
									<?php if( get_field( 'business_phone_ua', 'option' ) ){ ?>
										<li>
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
											<span class="mb-8"><?php echo esc_html__( 'Kiev office', 'kiss' ); ?></span>
											<?php if( pll_current_language() === 'en' ) { ?>
												<br>
												<a href="#" class="show-contact"><?php echo esc_html__( 'Show address', 'kiss' ); ?></a>
											<?php } ?>
											<p class="<?php if( pll_current_language() === 'en' ) echo "tel-hidden"; ?>"><?php echo get_field( 'kiev_office', 'option' ); ?></p>
										</li>
									<?php } ?>
									<?php if( get_field( 'address', 'option' ) ){ ?>
										<li>
											<span><?php echo esc_html__( 'Address', 'kiss' ); ?></span>
											<p><?php echo get_field( 'address', 'option' ); ?></p>
										</li>
									<?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
				</div>
                <div class="map__wrap">
                    <div class="map__block" style="margin-top: 40px">
                        <?php echo get_field( 'map' ); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq">
            <div class="faq__container2">
                <h2 class="title faq__title"><?php echo get_field( 'faq_title' ); ?></h2>
                <div class="faq__row">
                    <div class="faq__content">
                        <div class="faq__head">
                            <div class="faq__icon">
                                <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/web/faq.svg" alt="question">
                            </div>
                            <div class="faq__text"><?php echo get_field( 'faq_description' ); ?></div>
                        </div>
                    </div>
                    
					<?php if ( have_rows( 'faq' ) ) { ?>
						
						<div class="faq__spollers">
							<div data-spollers="" class="spoller__items _spoller-init">
								<?php while ( have_rows( 'faq' ) ) { the_row(); ?>
									<div class="spoller__item item-spoller">
										<button data-spoller="" class="item-spoller__title">
											<span><?php echo get_sub_field( 'title' ); ?></span>
											<svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.7915 24.6025C12.7915 24.36 12.8808 24.1175 13.0723 23.926C13.4424 23.5559 14.055 23.5559 14.4251 23.926L21.4957 30.9966L28.5663 23.926C28.9364 23.5559 29.5491 23.5559 29.9192 23.926C30.2893 24.2962 30.2893 24.9088 29.9192 25.2789L22.1722 33.0259C21.802 33.396 21.1894 33.396 20.8193 33.0259L13.0723 25.2789C12.8808 25.0874 12.7915 24.845 12.7915 24.6025Z" fill="#0075FF"></path>
												<path d="M20.5387 32.1333L20.5387 10.6535C20.5387 10.1302 20.9726 9.69629 21.4959 9.69629C22.0192 9.69629 22.4531 10.1302 22.4531 10.6535L22.4531 32.1333C22.4531 32.6566 22.0192 33.0906 21.4959 33.0906C20.9726 33.0906 20.5387 32.6566 20.5387 32.1333Z" fill="#0075FF"></path>
											</svg>
										</button>
										<div class="item-spoller__body" hidden>
											<div class="item-spoller__text">
												<p><?php echo get_sub_field( 'description' ); ?>
												<br class="softbreak"></p>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					<?php } ?>
            	</div>
            </div>
        </section>
        <section class="contact-soc">
            <div class="contact-soc__container2">
                <h2 class="contact-soc__title"><?php echo get_field( 'social_block_title' ); ?></h2>
                <div class="contact-soc__grid-layout">
					<?php if( get_field( 'telegram', 'option' ) ){ ?>
						<a href="<?php echo get_field( 'telegram', 'option' ); ?>" target="_blank" class="contact-soc__link">
							<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/icons/telegram.svg" alt="telegram">
							Telegram
						</a>
					<?php } ?>
					<?php if( get_field( 'whatsapp', 'option' ) ){ ?>
						<a href="<?php echo get_field( 'whatsapp', 'option' ); ?>" target="_blank" class="contact-soc__link">
							<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/icons/whatsapp.svg" alt="whatsapp">
							WhatsApp
						</a>
					<?php } ?>
					<?php if( get_field( 'viber', 'option' ) ){ ?>
						<a href="<?php echo get_field( 'viber', 'option' ); ?>" target="_blank" class="contact-soc__link">
							<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/icons/viber.svg" alt="viber">
							Viber
						</a>
					<?php } ?>
					<?php if( get_field( 'messenger', 'option' ) ){ ?>
						<a href="<?php echo get_field( 'messenger', 'option' ); ?>" target="_blank" class="contact-soc__link">
							<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/icons/messenger.svg" alt="messenger">
							Messenger
						</a>
					<?php } ?>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
