<section id="s-contact-form" class="s-contact-form">
    <div class="s-contact-form__container3">
        <div class="s-contact-form__row">
            <div class="s-contact-form__left">
                <h2 class="title"><?php echo get_sub_field( 'title' ); ?></h2>
                <?php if( get_sub_field( 'description' ) ){ ?>
                    <div class="s-contact-form__subtitle"><?php echo get_sub_field( 'description' ); ?></div>
                <?php } ?>
                <?php echo get_sub_field( 'contact_form' ); ?>
            </div>
            <div class="s-contact-form__right">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php if ( $image ) { ?>
                    <div class="s-contact-form__image">
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>