<section class="s-packages">
    <div class="s-packages__container3">
        <h2 class="title">
            <?php echo get_sub_field( 'title' ); ?>
        </h2>
        <div class="s-packages-tabs" data-tabs="">

            <?php if ( have_rows( 'packages' ) ){ ?>
                <nav data-tabs-titles class="s-packages-tabs__navigation">
                    <?php $tab = 0; while ( have_rows( 'packages' ) ) { the_row(); $tab++; ?>
                        <?php if ( get_row_layout() == 'tabs' ) { ?>
                            <button type="button" class="s-packages-tabs__title <?php if( $tab === 1 ) echo '_tab-active'; ?>"><?php echo get_sub_field( 'tab_title' ); ?></button>
                        <?php } ?>
                    <?php } ?>
                </nav>
            <?php } ?>

            <div data-tabs-body class="s-packages-tabs__content">     
                <?php if ( have_rows( 'packages' ) ){ ?>
                    <?php while ( have_rows( 'packages' ) ) { the_row(); ?>
                        <?php if ( get_row_layout() == 'tabs' ) { ?>
                            <div class="s-packages-tabs__body">
                                <div class="s-packages-tabs__items">
                                    <?php if ( have_rows( 'package' ) ) { ?>
                                        <?php while ( have_rows( 'package' ) ) { the_row(); ?>
                                            <div class="s-packages__item">
                                                <div class="s-packages__item-top">
                                                    <h4 class="s-packages__item-title">
                                                        <?php echo get_sub_field( 'title' ); ?>
                                                    </h4>
                                                    <?php if( get_sub_field( 'description' ) ){ ?>
                                                        <div class="s-packages__item-description">
                                                            <?php echo get_sub_field( 'description' ); ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <?php if( get_sub_field( 'price' ) ){ ?>
                                                    <div class="s-packages__item-prices">
                                                        <?php echo get_sub_field( 'price' ); ?>
                                                    </div>
                                                <?php } ?>
                                                <?php $link = get_sub_field( 'link' ); ?>
                                                <?php if ( $link ) { ?>
                                                    <a class="s-button" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>