<section class="info-project">
    <div class="info-project__container2">
        <div class="info-project__row">
            <div class="info-project__block info-project__block_location">
                <div class="info-project__text">
                    <span><?php echo esc_html__( 'Location', 'kiss' ); ?></span>
                    <?php echo get_sub_field( 'location' ); ?>
                </div>
                <div class="info-project__image-map">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/project/map.svg" alt="">
                </div>
            </div>
            <div class="info-project__grid-layout">
                <div class="info-project__top">
                    <div class="info-project__block info-project__block_branch">
                        <div class="info-project__text">
                            <span><?php echo esc_html__( 'Branch', 'kiss' ); ?></span>
                            <?php echo get_sub_field( 'branch' ); ?>
                        </div>
                        <div class="info-project__image-branch">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/project/plain.svg" alt="">
                        </div>
                    </div>
                    <div class="info-project__block info-project__block_tech">
                        <div class="info-project__text">
                            <span><?php echo esc_html__( 'Technologies', 'kiss' ); ?></span>
                        </div>
                        <div class="info-project__techs">
                            <?php $technologies_urls = get_sub_field( 'technologies' ); ?>
                            <?php if ( $technologies_urls ) {  ?>
                                <?php foreach ( $technologies_urls as $technologies_url ) { ?>
                                    <img src="<?php echo esc_url( $technologies_url ); ?>" />
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="info-project__bottom">
                    <div class="info-project__block info-project__block_bottom">
                        <div class="info-project__row-bottom">
                            <div class="info-project__row-small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/project/hnad.svg" alt=""><?php echo esc_html__( 'Solution', 'kiss' ); ?>
                            </div>
                            <div class="info-project__about-text">
                                <?php echo get_sub_field( 'solution' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="info-project__block info-project__block_bottom info-project__block_bottom2">
                        <div class="info-project__row-bottom">
                            <div class="info-project__row-small">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/project/time.svg" alt=""> <?php echo esc_html__( 'Terms', 'kiss' ); ?>
                            </div>
                            <div class="info-project__about-text">
                                <?php echo get_sub_field( 'terms' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>