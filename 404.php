<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kiss
 */

get_header();
?>

	<main class="page">
        <section class="error">
            <div class="error__container">
                <div class="error__row error__row_404">
                    <div class="error__images">
                        <div class="error__planet">
                            <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/svg/planet.svg" alt="planet">
                        </div>

                        <div class="error__main">
                            <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/svg/404.svg" alt="404">
                        </div>
                        <div class="error__decor">
                            <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/svg/decor.svg" alt="pen, ruler">
                        </div>
                    </div>
                    <div class="error__content">
                        <div class="error__title-big">
                            <?php echo esc_html__( 'oops!', 'kiss' ); ?>
                        </div>
                        <h2 class="error__title">
                            <?php echo esc_html__( 'looks like our website got lost in the digital space', 'kiss' ); ?>
                        </h2>
                        <div class="error__text">
                            <?php echo esc_html__( '<p>You have reached this page due to an error on our server.</p><p>We apologise for the inconvenience caused, we are actively working towards resolving the issue.</p>', 'kiss' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
