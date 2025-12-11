<section class="idea">
    <div class="idea__container2">
        <div class="idea__wrap">
            <div class="idea__content">
                <h2 class="idea__title">
                    <?php echo get_sub_field( 'title' ); ?>
                </h2>
                <div class="idea__text">
                    <p><?php echo get_sub_field( 'description' ); ?></p>
                </div>
            </div>
            <?php if ( get_sub_field( 'image' ) ) { ?>
                <div class="idea__image-ibg">
                    <img src="<?php the_sub_field( 'image' ); ?>" alt="<?php echo get_sub_field( 'title' ); ?>" />
                </div>
			<?php } ?>
        </div>
    </div>
</section>


			
			