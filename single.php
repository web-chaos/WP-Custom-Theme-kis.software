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
	<section class="article2" >
		<div class="article2__container">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<div id="breadcrumbs" class="article2__breadcrumbs breadcrumbs breadcrumbs__list">','</div>' );
				}
			?>
			<article class="article2__wrap">
				
				<?php if ( have_rows( 'blocks' ) ){ ?>
					<?php while ( have_rows( 'blocks' ) ) { the_row(); ?>
						<?php if ( get_row_layout() == 'article_top' ) { ?>
							<?php echo get_template_part( 'template-parts/blocks/article/article_top' ); ?>
						<?php } elseif ( get_row_layout() == 'article_content' ) { ?>
							<?php echo get_template_part( 'template-parts/blocks/article/article_content' ); ?>
						<?php } ?>
					<?php } ?>
				<?php } ?>

				<?php
					$current_post_id = get_the_ID();
					$categories = get_the_category($current_post_id);
					if (!empty($categories)) {
						$category_id = $categories[0]->term_id;

						$args = array(
							'cat' => $category_id,
							'post__not_in' => array($current_post_id),
							'posts_per_page' => 2,
							'orderby' => 'date',
							'order' => 'DESC'
						);

						$related_posts_query = new WP_Query($args);
						if ($related_posts_query->have_posts()) { ?>
							<div class="article2__other other-article2">
								<h2 class="other-article2__title title"><?php echo esc_html__( 'Other Blog Articles', 'kiss' ); ?></h2>
								<div class="other-article2__grid-layout">
									<?php 
										while ($related_posts_query->have_posts()) {
											$related_posts_query->the_post();
											get_template_part( 'template-parts/content', 'article' );
										}
									?>
								</div>
							</div>
						<?php
							wp_reset_postdata(); 
						}
					} 
				?>

				<div class="comment article2__comment">	
					<?php if ( comments_open() || get_comments_number() ) comments_template(); ?>
				</div>

			</article>
		</div>
	</section>




	<section class="form">
		<div class="form__container form__container_article">
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
