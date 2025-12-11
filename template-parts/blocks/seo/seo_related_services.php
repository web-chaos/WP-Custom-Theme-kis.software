<section class="s-related-services">
    <div class="s-related-services__container3">
        <h2 class="title">
            <?php echo get_sub_field( 'title' ); ?>
        </h2>
        <?php if( get_sub_field( 'description' ) ){ ?>
            <div class="s-related-services__description"><?php echo get_sub_field( 'description' ); ?></div>
        <?php } ?>
        <?php if ( have_rows( 'pages' ) ) { ?>
            <div class="s-related-services__items">
                <?php while ( have_rows( 'pages' ) ) { the_row(); ?>
                    <?php $link = get_sub_field( 'link' ); ?>
                    <?php if ( $link ) { ?>
                        <a class="s-related-services__item" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                    <?php } ?>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>