<section class="web-items">
    <div class="web-items__container2">
        <?php $banner = get_sub_field( 'banner' ); ?>
        <?php if ( $banner ) { ?>
            <div class="web-items__image-ibg">
                <img src="<?php echo esc_url( $banner['url'] ); ?>" alt="<?php echo esc_attr( $banner['alt'] ); ?>" />
            </div>
        <?php } ?>
        <?php if ( have_rows( 'lists' ) ) { ?>
            <ul class="web-items__list">
                <?php while ( have_rows( 'lists' ) ) { the_row(); ?>
                    <li class="web-items__list-item">
                        <div class="web-items__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/web/arrow.svg" alt="">
                        </div>
                        <div class="web-items__content">
                            <h4><?php echo get_sub_field( 'title' ); ?></h4>
                            <p><?php echo get_sub_field( 'description' ); ?></p>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</section>