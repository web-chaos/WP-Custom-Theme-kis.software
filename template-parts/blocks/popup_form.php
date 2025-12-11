<section id="popup-form" class="form form_small">
    <div class="form__container2">
        <h2 class="form__mob-title"><?php echo get_sub_field( 'mobile_title' ); ?></h2>
        <div class="form__row">
            <div class="form__main ">
                <div class="form-item__title"><?php echo get_sub_field( 'title' ); ?></div>
                <button type="submit" class="modal__btn open-popup">
                    <span><?php echo esc_html__( 'Send Message', 'kiss' ); ?></span>
                </button>
                <div class="popup__bg">
                    <div class="custom_popup">
                        <div class="close-popup"></div>
                        <?php echo get_sub_field( 'contact_form' ); ?>
                    </div>
                </div>
            </div>
            <?php if ( get_sub_field( 'image' ) ) : ?>
                <div data-da=".form__bottom,768,1" class="form__image">
				    <img loading="lazy" decoding="async" src="<?php the_sub_field( 'image' ); ?>" alt=""/>
                </div>
			<?php endif ?>
        </div>
    </div>
</section>