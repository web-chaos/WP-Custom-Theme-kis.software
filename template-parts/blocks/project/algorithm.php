<section class="algorithm">
    <div class="algorithm__container2">
        <h2 class="title algorithm__title">
            <?php echo get_sub_field( 'title' ); ?>
        </h2>
        <div class="algorithm__row">
            <?php if ( get_sub_field( 'image' ) ) { ?>
                <div class="algorithm__image-ibg">
                    <img src="<?php the_sub_field( 'image' ); ?>" alt="<?php echo get_sub_field( 'title' ); ?>"/>
                </div>
			<?php } ?>
            <div class="algorithm__text">
                <?php echo get_sub_field( 'description' ); ?>
            </div>
        </div>
    </div>
</section>


			
			