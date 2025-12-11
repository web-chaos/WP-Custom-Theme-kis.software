<section id="one-time-assessment" class="one-time-assessment">
    <div class="container__container3">
        <h2 class="title"><?php echo get_sub_field( 'title' ); ?></h2>
        <div class="one-time-assessment__description"><?php echo get_sub_field( 'description' ); ?></div>
        <div class="one-time-assessment__wrapper">
            <h2 class="title one-time-assessment__group--title"><?php echo get_sub_field( 'group_title' ); ?></h2>
            <div class="one-time-assessment__group--price"><?php echo get_sub_field( 'group_price' ); ?></div>
            <div class="one-time-assessment__group--description"><span></span><?php echo get_sub_field( 'group_description' ); ?></div>
            <?php $link = get_sub_field( 'link' ); ?>
			<?php if ( $link ) { ?>
                <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class=" s-converse__link button s-button <?php if ( get_sub_field( 'full_blue_style' ) == 1 ) echo 's-button--light'; ?>">
                    <?php echo esc_html( $link['title'] ); ?>
                </a>
			<?php } ?>
        </div>
    </div>
</section>