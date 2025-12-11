<?php
/**
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

	<main id="primary" class="site-main">
		<div class="blog-main__container2">
			<?php
				if ( !is_front_page() && function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<div id="breadcrumbs" class="article2__breadcrumbs breadcrumbs breadcrumbs__list">','</div>' );
				}
			?>
        </div>
		<?php if ( have_rows( 'blocks' ) ){ ?>
			<?php while ( have_rows( 'blocks' ) ) { the_row(); ?>
				<?php if ( get_row_layout() == 'hero_block' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/hero_block' ); ?>
				<?php } elseif ( get_row_layout() == 'horizontal_accordion' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/horizontal_accordion' ); ?>
				<?php } elseif ( get_row_layout() == 'cooperation' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/cooperation' ); ?>
				<?php } elseif ( get_row_layout() == 'we_you' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/we_you' ); ?>
				<?php } elseif ( get_row_layout() == 'what_franchise' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/what_franchise' ); ?>
				<?php } elseif ( get_row_layout() == 'how_it_works' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/how_it_works' ); ?>
				<?php } elseif ( get_row_layout() == 'spollers' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/spollers' ); ?>
				<?php } elseif ( get_row_layout() == 'steps' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/steps' ); ?>
				<?php } elseif ( get_row_layout() == 'timeline' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/timeline' ); ?>
				<?php } elseif ( get_row_layout() == 'popup_form' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/popup_form' ); ?>
				<?php } elseif ( get_row_layout() == 'team' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/team' ); ?>
				<?php } elseif ( get_row_layout() == 'ways' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/ways' ); ?>
				<?php } elseif ( get_row_layout() == 'work' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/work' ); ?>
				<?php } elseif ( get_row_layout() == 'want_company' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/want_company' ); ?>
				<?php } elseif ( get_row_layout() == 'home_hero' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/home_hero' ); ?>
				<?php } elseif ( get_row_layout() == 'our_clients' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/our_clients' ); ?>
				<?php } elseif ( get_row_layout() == 'our_team_slider' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/our_team_slider' ); ?>
				<?php } elseif ( get_row_layout() == 'map' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/map' ); ?>
				<?php } elseif ( get_row_layout() == 'our_projects' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/our_projects' ); ?>
				<?php } elseif ( get_row_layout() == 'services' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/services' ); ?>
				<?php } elseif ( get_row_layout() == 'technologies' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/technologies' ); ?>
				<?php } elseif ( get_row_layout() == 'why_choose_us' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/why_choose_us' ); ?>
				<?php } elseif ( get_row_layout() == 'video' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/video' ); ?>
				<!-- seo blocks -->
				<?php } elseif ( get_row_layout() == 'seo_hero_block' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_hero_block' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_importance_services' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_importance_services' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_serveces' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_serveces' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_contact_us' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_contact_us' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_working_process' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_working_process' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_testimonials' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_testimonials' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_technologies' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_technologies' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_packages' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_packages' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_stats' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_stats' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_faq' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_faq' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_partner' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_partner' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_related_blogs' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_related_blogs' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_related_services' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_related_services' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_business_niches' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_business_niches' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_models' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_models' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_industry_growth' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_industry_growth' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_related_services_slider' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_related_services_slider' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_contact_form' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_contact_form' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_development' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_development' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_how_we_work' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_how_we_work' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_web_items' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_web_items' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_technologies_var2' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_technologies_var2' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_faq_var2' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_faq_var2' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_our_projects' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/seo/seo_our_projects' ); ?>
				<?php } ?>
			<?php } ?>
		<?php } ?>

	</main>

<?php
get_footer();
