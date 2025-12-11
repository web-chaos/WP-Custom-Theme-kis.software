<section class="work">
    <div class="work__container2">
        <h2 class="title work__title"><?php echo get_sub_field( 'title' ); ?></h2>
        <div class="work__image">
            <?php if ( get_sub_field( 'black_image_pc' ) ) { ?>
				<img class="work__img_b_pc" src="<?php the_sub_field( 'black_image_pc' ); ?>" alt="<?php echo get_sub_field( 'title' ); ?>"/>
			<?php } ?>
			<?php if ( get_sub_field( 'black_image_mobile' ) ) { ?>
				<img class="work__img_b_mon" src="<?php the_sub_field( 'black_image_mobile' ); ?>" alt="<?php echo get_sub_field( 'title' ); ?>"/>
			<?php } ?>
			<?php if ( get_sub_field( 'white_image_pc' ) ) { ?>
				<img class="work__img_w_pc" src="<?php the_sub_field( 'white_image_pc' ); ?>" alt="<?php echo get_sub_field( 'title' ); ?>"/>
			<?php } ?>
			<?php if ( get_sub_field( 'white_image_mobile' ) ) { ?>
				<img class="work__img_w_mon" src="<?php the_sub_field( 'white_image_mobile' ); ?>" alt="<?php echo get_sub_field( 'title' ); ?>"/>
			<?php } ?>
        </div>
    </div>
</section>


			