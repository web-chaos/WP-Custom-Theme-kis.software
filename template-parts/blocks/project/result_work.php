<section class="result-work">
    <div class="result-work__container2">
        <div class="result-work__wrap">
            <div class="result-work__content">
                <h2 class="result-work__title"><?php echo get_sub_field( 'title' ); ?></h2>
                <div class="result-work__text">
                    <?php echo get_sub_field( 'description' ); ?>
                </div>
            </div>
            <?php if ( get_sub_field( 'image' ) ) { ?>
                <div data-da=".result-work__content,768,1" class="result-work__image">
                    <img src="<?php the_sub_field( 'image' ); ?>" alt="<?php echo get_sub_field( 'title' ); ?>"/>
                </div>
			<?php } ?>
        </div>
    </div>
</section>



			
			