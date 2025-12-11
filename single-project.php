<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kiss
 */

get_header();
?>

	<main class="page">
		<?php if ( have_rows( 'blocks' ) ){ ?>
			<?php while ( have_rows( 'blocks' ) ) { the_row(); ?>
				<?php if ( get_row_layout() == 'project_hero' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/project/project_hero' ); ?>
				<?php } elseif ( get_row_layout() == 'info_project' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/project/info_project' ); ?>
				<?php } elseif ( get_row_layout() == 'idea' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/project/idea' ); ?>
				<?php } elseif ( get_row_layout() == 'algorithm' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/project/algorithm' ); ?>
				<?php } elseif ( get_row_layout() == 'result_work' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/project/result_work' ); ?>
				<?php } ?>
			<?php } ?>
		<?php } ?>

		

		<?php
		$current_post_id = get_the_ID();
		$current_post_terms = wp_get_post_terms($current_post_id, 'projects');

		if (!empty($current_post_terms) && !is_wp_error($current_post_terms)) {
			$term_ids = wp_list_pluck($current_post_terms, 'term_id');
			$args = array(
				'post_type' => 'project',
				'posts_per_page' => -1,
				'post__not_in' => array($current_post_id), 
				'tax_query' => array(
					array(
						'taxonomy' => 'projects',
						'field' => 'term_id',
						'terms' => $term_ids,
					),
				),
			);

			$related_projects = new WP_Query($args);
			if ($related_projects->have_posts()) { ?>
		<section class="works section">
			<div class="works__container2">
				<h2 class="works__title title">
					<?php echo esc_html__( 'our projects/', 'kiss' ); ?>
				</h2>
				<div class="works__wrap">
					<div class="works__slider swiper">
						<div class="swiper-wrapper">
							<?php 
							while ($related_projects->have_posts()) {
								$related_projects->the_post(); ?>
								<div class="swiper-slide">
									<?php get_template_part( 'template-parts/content', 'project' ); ?>
								</div>
							<?php } ?>
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
							<?php
							$terms = wp_get_post_terms(get_the_ID(), 'projects');
							if (!empty($terms) && !is_wp_error($terms)) :
								$main_term = $terms[0];

								if ($main_term->parent) {
									$parent_term = get_term($main_term->parent, 'projects');
									$term_link = esc_url(get_term_link($parent_term));
								} 
								?>
								<a href="<?php echo $term_link; ?>" class="works__link">
									<svg width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M19 22.3516L25 15.8516L19 9.35156" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M6 15.3516H24" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
									<span><?php echo esc_html__( 'More projects', 'kiss' ); ?></span>
								</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php }
			wp_reset_postdata();
			}
		?>

		<section class="form">
			<div class="form__container2">
				<h2 class="form__mob-title">
					contact/
				</h2>
				<div class="form__row">

					<div class="form__main ">
						<div class="form__send-text">
							Thank you! <br>
							We will contact soon!
						</div>
						<form data-dev class="form__form-block">
							<div class="form__slider-wrap">
								<div class="form__slider swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="form-item">
												<div class="form-item__title">
													Let's connect on a personal level!
												</div>
												<div class="form-item__input">
													<input data-required type="text" placeholder="name" class="input">
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="form-item">
												<div class="form-item__title">
													Stay in the loop with exciting updates!
												</div>
												<div class="form-item__input">
													<input data-required="email" type="text" placeholder="email" class="input">
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="form-item">
												<div class="form-item__title">
													Get direct access to success!
												</div>

												<div class="form-item__input">
													<div class="form-item__row">
														<input id="phone" data-required="phone" type="text" placeholder="phone number" class="input">
													</div>

												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="form-item">
												<div class="form-item__title">
													Showcase your brand's greatness!
												</div>
												<div class="form-item__input">
													<input type="text" placeholder="company name (optional)" class="input">
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="form-item">
												<div class="form-item__title">
													Inspire us with your vision!
												</div>
												<div class="form-item__input">
													<input type="text" placeholder="project description (optional)" class="input">
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="form-item">
												<div class="form-item__title">
													Make something extraordinary happen within reach!
												</div>
												<div class="form-item__input">
													<input type="text" placeholder="budget (optional)" class="input">
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="form-item">
												<div class="form-item__title">
													Let's bring your dreams to life, on schedule!
												</div>
												<label class="form-item__input form-item__input_data-calendar">
													<span class="calendar__btn">
														<svg width="26" height="29" viewBox="0 0 26 29" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M7.66667 1V5M18.3333 1V5M1.66667 10.4533H24.3333M25 9.66667V21C25 25 23 27.6667 18.3333 27.6667H7.66667C3 27.6667 1 25 1 21V9.66667C1 5.66667 3 3 7.66667 3H18.3333C23 3 25 5.66667 25 9.66667Z" stroke="#0075FF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
															<path d="M17.9266 16.6006H17.9386M17.9266 20.6006H17.9386M12.9933 16.6006H13.0066M12.9933 20.6006H13.0066M8.05859 16.6006H8.07193M8.05859 20.6006H8.07193" stroke="#0075FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
														</svg>
													</span>
													<input data-datepicker type="text" placeholder="select the date (optional)" class="input">
												</label>
											</div>
										</div>
									</div>
									<div class="form__bottom">
										<button class="form__send">
											<span class="form__icon">
												<svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M15.5995 18.2031C15.357 18.2031 15.1145 18.1138 14.9231 17.9224C14.553 17.5522 14.553 16.9396 14.9231 16.5695L21.9937 9.49889L14.9231 2.4283C14.553 2.05818 14.553 1.44557 14.9231 1.07544C15.2932 0.705321 15.9058 0.705321 16.276 1.07544L24.023 8.82246C24.3931 9.19258 24.3931 9.8052 24.023 10.1753L16.276 17.9224C16.0845 18.1138 15.842 18.2031 15.5995 18.2031Z" />
													<path d="M23.1309 10.4554L1.65106 10.4554C1.12778 10.4554 0.693848 10.0215 0.693848 9.49823C0.693848 8.97495 1.12778 8.54102 1.65106 8.54102L23.1309 8.54102C23.6542 8.54102 24.0881 8.97495 24.0881 9.49823C24.0881 10.0215 23.6542 10.4554 23.1309 10.4554Z" />
												</svg>

											</span> <span>Finish</span>
										</button>
										<button class="form__next">
											<span class="form__icon">
												<svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M15.5995 18.2031C15.357 18.2031 15.1145 18.1138 14.9231 17.9224C14.553 17.5522 14.553 16.9396 14.9231 16.5695L21.9937 9.49889L14.9231 2.4283C14.553 2.05818 14.553 1.44557 14.9231 1.07544C15.2932 0.705321 15.9058 0.705321 16.276 1.07544L24.023 8.82246C24.3931 9.19258 24.3931 9.8052 24.023 10.1753L16.276 17.9224C16.0845 18.1138 15.842 18.2031 15.5995 18.2031Z" />
													<path d="M23.1309 10.4554L1.65106 10.4554C1.12778 10.4554 0.693848 10.0215 0.693848 9.49823C0.693848 8.97495 1.12778 8.54102 1.65106 8.54102L23.1309 8.54102C23.6542 8.54102 24.0881 8.97495 24.0881 9.49823C24.0881 10.0215 23.6542 10.4554 23.1309 10.4554Z" />
												</svg>

											</span>
											<span>next</span>
										</button>
										<div class="form__pagination">

										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div data-da=".form__bottom,768,1" class="form__image">
						<img src="img/svg/form-img.svg" alt="">
					</div>
				</div>
			</div>
		</section>
	</main>

<?php
get_footer();
