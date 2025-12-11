<?php
/**
 * The template for displaying taxonomy projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kiss
 */

get_header();

	$taxonomy_prefix = 'projects';
	$term_id = get_queried_object_id();
	$term_id_prefixed = $taxonomy_prefix .'_'. $term_id;
?>

	<main class="page">
		<section class="hero-block">
			<div class="hero-block__container2">
				<div class="hero-block__content">
					<h1 class="title-big hero-block__title"><?php echo (get_field( 'custom_title', $term_id_prefixed )) ? get_field( 'custom_title', $term_id_prefixed ) : single_cat_title() ?></h1>
					<?php $link = get_field( 'link', $term_id_prefixed ); ?>
					<?php if ( $link ) { ?>
						<a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="hero-block__button hero__button">
							<svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M35.4526 28.6447C35.1865 28.9107 34.8224 29.0788 34.4023 29.0788C33.5901 29.0788 32.9179 28.4066 32.9179 27.5944L32.9179 12.0781L17.4017 12.0782C16.5895 12.0782 15.9173 11.406 15.9173 10.5938C15.9173 9.78153 16.5895 9.10935 17.4017 9.10935L34.4023 9.10932C35.2145 9.10932 35.8867 9.7815 35.8867 10.5937L35.8867 27.5944C35.8867 28.0145 35.7186 28.3786 35.4526 28.6447Z" fill="#0075FF" />
								<path d="M35.2159 11.8813L11.6474 35.4497C11.0733 36.0239 10.121 36.0239 9.54687 35.4497C8.97271 34.8755 8.97271 33.9233 9.54687 33.3491L33.1153 9.7807C33.6895 9.20654 34.6417 9.20654 35.2159 9.7807C35.79 10.3549 35.79 11.3071 35.2159 11.8813Z" fill="#0075FF" />
							</svg>
							<span><?php echo esc_html( $link['title'] ); ?></span>
						</a>
					<?php } ?>
				</div>
				<?php if ( get_field( 'image', $term_id_prefixed ) ) { ?>
					<div class="hero-block__image t-tn">
						<img src="<?php the_field( 'image', $term_id_prefixed ); ?>" alt="<?php echo single_cat_title(); ?>"/>
					</div>
				<?php } ?>
			</div>
		</section>
		<section class="projects">
			<div class="projects__container2">
				<?php
				$parent_categories = get_terms(array(
					'taxonomy'   => 'projects',
					'parent'     => 0,
					'hide_empty' => false,
				));

				foreach ($parent_categories as $parent_category) {
					
					$child_categories = get_terms(array(
						'taxonomy'   => 'projects',
						'parent'     => $parent_category->term_id,
						'hide_empty' => false,
					));
					if ($child_categories) { ?>	
						<div class="projects__tags tags">
							<div class="tags__slider swiper">
								<div class="swiper-wrapper">
									<?php foreach ($child_categories as $child_category) { ?>
										<div class="swiper-slide">
											<a href="<?php echo esc_url(get_term_link($child_category->term_id)); ?>" class="tags__item <?php if( get_queried_object_id() === $child_category->term_id ) echo 'active'; ?>"><?php echo esc_html($child_category->name); ?></a>
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

				<div class="projects__grid-layout">
					<?php
						if( have_posts() ) {
							while ( have_posts() ) {
								the_post();
								get_template_part( 'template-parts/content', 'project' );
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
