<?php $slider_images = get_sub_field( 'slider' ); ?>
<?php if ( $slider_images ) { ?>
    <div class="s-partner">
        <div class="s-partner__container3">
            <div class="s-partner__wrap">
                <div class="s-partner__slider swiper">
                    <div class="s-partner__wrapper swiper-wrapper">
                        <?php foreach ( $slider_images as $slider_image ){ ?>
                            <div class="s-partner__slide swiper-slide">
                                <div class="s-partner__image">
                                    <img class="images-theme" src="<?php echo esc_url( $slider_image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $slider_image['alt'] ); ?>" />
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>