<?php
/**
 * Template Name: Landing page
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
		<?php if ( have_rows( 'blocks' ) ){ ?>
			<?php while ( have_rows( 'blocks' ) ) { the_row(); ?>
				<?php if ( get_row_layout() == 'popup_form' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/popup_form' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_hero_block' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/landing/seo_hero_block' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_contact_us' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/landing/seo_contact_us' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_working_process' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/landing/seo_working_process' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_testimonials' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/landing/seo_testimonials' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_contact_form' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/landing/seo_contact_form' ); ?>
				<?php } elseif ( get_row_layout() == 'seo_technologies_var2' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/landing/seo_technologies_var2' ); ?>
				<?php } elseif ( get_row_layout() == 'vulnerability_assessment' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/landing/vulnerability_assessment' ); ?>
				<?php } elseif ( get_row_layout() == 'why_choose_us' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/landing/why_choose_us' ); ?>
				<?php } elseif ( get_row_layout() == 'needs_to_be_done' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/landing/needs_to_be_done' ); ?>
				<?php } elseif ( get_row_layout() == 'one_time_assessment' ) { ?>
					<?php echo get_template_part( 'template-parts/blocks/landing/one_time_assessment' ); ?>
				<?php } ?>
			<?php } ?>
		<?php } ?>

	</main>

<?php
get_footer();
