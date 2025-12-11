<section class="main-block">
    <div class="main-block__container-big">
        <div class="section__decor-block">
        </div>
        <div class="main-block__wrap">
            <?php $clitch_link = get_sub_field( 'clitch_link' ); ?>
			<?php if ( $clitch_link ) { ?>
            <a href="<?php echo esc_url( $clitch_link['url'] ); ?>" target="<?php echo esc_attr( $clitch_link['target'] ); ?>" class="main-block__link">
                <p><?php echo esc_html( $clitch_link['title'] ); ?></p>
                <img class="dark" src="<?php echo get_template_directory_uri(); ?>/img/svg/clitch.svg" alt="">
                <img class="light" src="<?php echo get_template_directory_uri(); ?>/img/svg/clitch2.svg" alt="">
            </a>
			<?php } ?>
        </div>
        <h1 class="visibility-hidden">
            <?php echo get_sub_field( 'hidden_title' ); ?>
        </h1>
        <div id="typed-strings" class="typed-strings">
            <p>
                <?php echo get_sub_field( 'title' ); ?>
            </p>
        </div>
        <div class="main-block__title">
            <p class="title-decor"><?php echo get_sub_field( 'title' ); ?></p>
            <div>
                <p data-typed></p><span class="carret">|</span>
            </div>
        </div>
        <?php if ( get_sub_field( 'image' ) ) { ?>
            <div class="main-block__image">
				<img src="<?php the_sub_field( 'image' ); ?>" alt="<?php echo strip_tags(get_sub_field( 'title' )); ?>"/>
            </div>
		<?php } ?>        
    </div>
</section>