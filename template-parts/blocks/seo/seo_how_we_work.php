<section class="how-we-work">
    <div class="how-we-work__container2">
        <div class="how-we-work__wrap">
            <h2 class="title how-we-work__title"><?php echo get_sub_field( 'title' ); ?> </h2>
            <div class="how-we-work__row">
                <?php $icon = get_sub_field( 'icon' ); ?>
                <?php if ( $icon ) { ?>
                    <div class="how-we-work__image">
                        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                    </div>
                <?php } ?>
                <div class="how-we-work__text">
                    <p><?php echo get_sub_field( 'description' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>