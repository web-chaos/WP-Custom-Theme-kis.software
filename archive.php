<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kiss
 */

get_header();
	$taxonomy_prefix = 'category';
	$term_id = get_queried_object_id();
	$term_id_prefixed = $taxonomy_prefix .'_'. $term_id;
?>

	<main class="page">
		<section class="blog-main">
			<div class="blog-main__container2">
				<h1 class="blog-main__title title-big"><?php single_cat_title(); ?></h1>	
				<?php
					$current = get_the_category();

					if (!empty($current)) {
						$current_id = $current[0]->term_id;

						$args = array(
							'cat'            => $current_id,
							'posts_per_page' => 1,
							'orderby'        => 'date',
							'order'          => 'DESC'
						);

						$latest_post = new WP_Query($args);

						if ($latest_post->have_posts()) {
							while ($latest_post->have_posts()) {
								$latest_post->the_post();
								get_template_part( 'template-parts/content', 'blog-main' );
							}
							wp_reset_postdata();
						}
					}
				?>
			</div>

		</section>
		<section class="articles">
			<div class="articles__container2">
				
				<?php
				$parent_categories = get_categories(array(
					'parent'     => 0,
					'hide_empty' => false,
				));

				foreach ($parent_categories as $parent_category) {
					
					$child_categories = get_categories(array(
						'parent'     => $parent_category->term_id,
						'hide_empty' => false,
					));
					if ($child_categories) { ?>	
						<div class="articles__tags tags">
							<div class="tags__slider swiper">
								<div class="swiper-wrapper">
									<?php foreach ($child_categories as $child_category) { ?>
										<div class="swiper-slide">
											<a href="<?php echo esc_url(get_category_link($child_category->term_id)); ?>" class="tags__item <?php if( get_queried_object_id() === $child_category->term_id ) echo 'active'; ?>"><?php echo esc_html($child_category->name); ?></a>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="tags__arrows">
								<button class="tags__arrow prev">
									<svg>
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow-slider"></use>
									</svg>
								</button>
								<button class="tags__arrow next">
									<svg>
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow-slider"></use>
									</svg>
								</button>
							</div>
						</div>
					<?php } ?>
				<?php } ?>

				<div class="articles__grid-layout">
					<?php
						if( have_posts() ) {
							while ( have_posts() ) {
								the_post();
								get_template_part( 'template-parts/content', 'article' );
							}
						} else {
							get_template_part( 'template-parts/content', 'none' );
						}
					?>
				</div>
			</div>
		</section>
		<?php if( get_field( 'contact_form', $term_id_prefixed ) ){ ?>
			<section class="form form_small">
				<div class="form__container2">
					<h2 class="form__mob-title"><?php echo get_field( 'mobile_title', $term_id_prefixed ); ?></h2>
					<div class="form__row">
						<div class="form__main ">
							<div class="form-item__title"><?php echo get_field( 'title', $term_id_prefixed ); ?></div>
							<button type="submit" class="modal__btn open-popup">
								<span><?php echo esc_html__( 'Send Message', 'kiss' ); ?></span>
							</button>
							<div class="popup__bg">
								<div class="custom_popup">
									<div class="close-popup"></div>
									<?php echo get_field( 'contact_form', $term_id_prefixed ); ?>
								</div>
							</div>
						</div>
						<?php $contact_form_image = get_field( 'contact_form_image', $term_id_prefixed ); ?>
						<?php if ( $contact_form_image ) : ?>
							<div data-da=".form__bottom,768,1" class="form__image">
								<img src="<?php echo esc_url( $contact_form_image['url'] ); ?>" alt="<?php echo esc_attr( $contact_form_image['alt'] ); ?>" />
							</div>
						<?php endif; ?>
					</div>
				</div>
			</section>
		<?php } ?>
	</main>

<?php
get_footer();
