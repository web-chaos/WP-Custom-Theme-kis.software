<section class="s-services">
    <div class="s-services__container3">
        <div class="s-services__head">
            <h2 class="title text-blue">
                <?php echo get_sub_field( 'title' ); ?>
            </h2>
            <?php if( get_sub_field( 'description' ) ){ ?>
                <div class="s-services__description"><?php echo get_sub_field( 'description' ); ?></div>
            <?php } ?>
        </div>
        <?php if ( have_rows( 'list' ) ) { ?>
            <div class="s-services__items">
                <?php while ( have_rows( 'list' ) ) { the_row(); ?>
                    <a href="<?php if ( get_sub_field( 'link' ) ) echo esc_url( get_sub_field( 'link' ) ); ?>" class="s-services__item">
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php if ( $image ) { ?>
                            <div class="s-services__item-image">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                            </div>
                        <?php } ?>
                        <div class="s-services__item-content">
                            <h4 class="s-services__item-title"><?php echo get_sub_field( 'title' ); ?></h4>
                            <div class="s-services__item-text"><?php echo get_sub_field( 'description' ); ?></div>
                        </div>
                    </a>
				<?php } ?>                         
            </div>
        <?php } ?>
    </div>
</section>