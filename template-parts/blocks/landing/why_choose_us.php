<section id="why-choose-us" class="s-services why-choose-us">
    <div class="s-services__container3">
        <div class="s-services__head">
            <h2 class="title text-blue"><?php echo get_sub_field( 'title' ); ?></h2>
        </div>
        <?php if ( have_rows( 'lists' ) ) { ?>
            <div class="s-services__items">
                <?php while ( have_rows( 'lists' ) ) { the_row(); ?>
                    <div class="s-services__item">
                        <?php $icon = get_sub_field( 'icon' ); ?>
                        <?php if ( $icon ) { ?>
                            <div class="s-services__item-image">
                                <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                            </div>
                        <?php } ?>
                        <div class="s-services__item-content">
                            <h4 class="s-services__item-title"><?php echo get_sub_field( 'title' ); ?></h4>
                            <div class="s-services__item-text"><?php echo get_sub_field( 'description' ); ?></div>
                        </div>
                    </div>
				<?php } ?>
            </div>
		<?php } ?>
    </div>
</section>