<section class="s-hero-block">
    <div class="s-hero-block__container3">
        <div class="s-hero-block__row">
            <div class="s-hero-block__content">
                <h1 class="title-big">
                    <?php echo get_sub_field( 'title' ); ?>
                </h1>
                <div class="s-hero-block__text">
                    <p><?php echo get_sub_field( 'description' ); ?></p>
                </div>
                <?php $link = get_sub_field( 'link' ); ?>
                <?php if ( $link ) { ?>
                    <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="s-button">
                        <svg>
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow-link"></use>
                        </svg>
                        <span><?php echo esc_html( $link['title'] ); ?></span>
                    </a>
                <?php } ?>
            </div>
            <?php $image = get_sub_field( 'image' ); ?>
			<?php if ( $image ) { ?>
                <div class="s-hero-block__image">
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                </div>
			<?php } ?>
        </div>
    </div>
</section>