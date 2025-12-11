<section class="s-models">
    <div class="s-models__container3">
        <h2 class="title"><?php echo get_sub_field( 'title' ); ?></h2>
		<?php if ( have_rows( 'models' ) ) { ?>
        <div class="s-models__items">
            <?php while ( have_rows( 'models' ) ) { the_row(); ?>
                <div class="s-models__item">
                    <?php $icon = get_sub_field( 'icon' ); ?>
                    <?php if ( $icon ) { ?>
                        <div class="s-models__item-icon">
                            <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                        </div>
                    <?php } ?>
                    
                    <h4 class="s-models__item-title"><?php echo get_sub_field( 'title' ); ?></h4>
                    <div class="s-models__item-text"><?php echo get_sub_field( 'description' ); ?></div>
                </div>
            <?php } ?>
        </div>
		<?php } ?>
    </div>
</section>