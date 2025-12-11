<?php $stats_blue = ( get_sub_field( 'stats_blue' ) ) ? 1 : 0; ?>
<?php $stats_title = ( get_sub_field( 'title' ) ) ? get_sub_field( 'title' ) : ''; ?>
<?php if ( have_rows( 'stats_list' ) ) { ?>
    <section class="s-stats <?php echo ($stats_blue ? 's-stats--blue ' : '') . ($stats_title ? 's-stats--with-title' : ''); ?>">
        <div class="s-stats__container3">
            <div class="s-stats__wrap">
                <div class="s-stats__row">
                    <?php if( $stats_title ){ ?>
                        <h2 class="title"><?php echo $stats_title; ?></h2>
                    <?php } ?>
                    <div class="s-stats__items">
                        <?php while ( have_rows( 'stats_list' ) ) { the_row(); ?>
                            <div class="s-stats__item">
                                <div class="s-stats__item-top">
                                    <div class="s-stats__item-digit text-blue"><?php echo get_sub_field( 'number' ); ?></div>
                                    <div class="s-stats__item-text"><?php echo get_sub_field( 'description' ); ?></div>
                                </div>
                                <?php $icon = get_sub_field( 'icon' ); ?>
                                <?php if ( $icon ) { ?>
                                    <div class="s-stats__item-icon">
                                        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>