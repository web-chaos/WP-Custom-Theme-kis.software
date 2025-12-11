<section class="what-franchise">
    <div class="what-franchise__container2">
        <div class="what-franchise__row">
            <div class="what-franchise__content">
                <h2 class="what-franchise__title"><?php echo get_sub_field( 'title' ); ?></h2>
                <div class="what-franchise__text"><?php echo get_sub_field( 'description' ); ?></div>
            </div>
            <?php if ( get_sub_field( 'image' ) ) { ?>
                <div class="what-franchise__image-ibg">
                    <img src="<?php the_sub_field( 'image' ); ?>" alt="<?php echo get_sub_field( 'title' ); ?>"/>
                </div>
            <?php } ?>
        </div>
    </div>
</section>