<section class="develop">
    <div class="develop__container2">
        <h2 class="title develop__title"><?php echo get_sub_field( 'title' ); ?></h2>
        <?php if( get_sub_field( 'description' ) ){ ?>
            <div class="develop__text">
                <p><?php echo get_sub_field( 'description' ); ?></p>
            </div>
        <?php } ?>
		<?php if ( have_rows( 'list' ) ) { ?>
            <div class="develop__row">
                <ul class="develop__list">
                    <?php while ( have_rows( 'list' ) ) { the_row(); ?>
                        <?php $link = get_sub_field( 'link' ); ?>
                        <?php if ( $link ) { ?>
                            <li>
                                <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/web/arrow2.svg" alt="<?php echo esc_html( $link['title'] ); ?>">
                                    <?php echo esc_html( $link['title'] ); ?>
                                </a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    </div>
</section>