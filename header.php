<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kiss
 */

?>
<!doctype html>
<html id="subject" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap&_v=20240711191210" rel="stylesheet">
	<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/57/13/intl/ru_ALL/common.js">
	<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/57/13/intl/ru_ALL/util.js">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site wrapper">

<header class="header">
   <div class="header__container">
    
    <a href="<?php echo home_url( '/' ); ?>" class="header__logo">
		<?php $custom_logo = get_theme_mod('custom_logo');
		if ($custom_logo) { ?>
			<img loading="lazy" decoding="async" class="dark" src="<?php echo esc_url(wp_get_attachment_image_url($custom_logo, 'full')); ?>" alt="<?php bloginfo('name'); ?>">
		<?php } ?>
		<?php
		$additional_logo = get_theme_mod('additional_logo');
		if ($additional_logo) { ?>
			<img loading="lazy" decoding="async" class="light" src="<?php echo esc_url($additional_logo); ?>" alt="<?php bloginfo('name'); ?>">
		<?php } ?>

        <?php
			echo $custom_text = get_theme_mod('custom_text_field');
			if ($custom_text) echo wp_kses_post($custom_text);
    	?>
    </a>

    <div class="header__menu menu">
        <nav class="menu__body">
            <div class="menu__decor">
                <svg width="62" height="651" viewBox="0 0 62 651" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32 0L32 641" stroke="#0075FF" stroke-width="2.5"></path>
                    <path d="M31 477L46.7867 491.626C53.9362 498.25 58 507.554 58 517.301V555" stroke="#0075FF" stroke-width="2.5"></path>
                    <path d="M58.0454 559.07C59.175 559.07 60.0908 558.159 60.0908 557.035C60.0908 555.911 59.175 555 58.0454 555C56.9158 555 56 555.911 56 557.035C56 558.159 56.9158 559.07 58.0454 559.07Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10"></path>
                    <path d="M32 320.5L18.1447 334.355C8.76784 343.732 3.5 356.45 3.5 369.711V435" stroke="#0075FF" stroke-width="2.5"></path>
                    <path d="M4.04539 439.07C5.17502 439.07 6.09077 438.159 6.09077 437.035C6.09077 435.911 5.17502 435 4.04539 435C2.91575 435 2 435.911 2 437.035C2 438.159 2.91575 439.07 4.04539 439.07Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10"></path>
                    <path d="M31.5 649C33.9853 649 36 646.985 36 644.5C36 642.015 33.9853 640 31.5 640C29.0147 640 27 642.015 27 644.5C27 646.985 29.0147 649 31.5 649Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10"></path>
                </svg>

            </div>

			<?php

				if( is_page_template('page-landing.php') ) {
					wp_nav_menu(
						array(
							'theme_location' => 'menu-landing',
							'menu_id'        => 'primary-menu',
							'menu_class'	 => 'menu__list',
							'container'		 => false,
							'walker'         => new Kiss_Walker_Nav_Menu(),
							'has_children'   => true,
						)
					);
				} else {
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'	 => 'menu__list',
							'container'		 => false,
							'walker'         => new Kiss_Walker_Nav_Menu(),
							'has_children'   => true,
						)
					);
				}
				
			?>

			<div class="menu__right">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-lang',
							'menu_id'        => 'lang-menu',
							'menu_class'	 => 'menu__lang-list menu__language--mobile',
							'container'		 => false,
						)
					);
				?>
				<ul class="menu__socials">
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
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-lang',
							'menu_id'        => 'lang-menu',
							'menu_class'	 => 'menu__language',
							'container'		 => false,
						)
					);
				?>
				<div class="menu__switch switch">
					<div class="switch">
						<input data-theme id="c_1" data-error="Ошибка" class="switch__input" type="checkbox" value="1" name="form[]">
						<label for="c_1" class="switch__label"><span class="switch__circle"></span></label>
					</div>
				</div>
			</div>
			
         
        </nav>
    </div>



    <button class="icon-menu">
        <span></span>
    </button>
</div>
</header>