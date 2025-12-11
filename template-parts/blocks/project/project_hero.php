<section class="about-project">
    <div class="about-project__container2">
        <div class="about-project__row">
            <div class="about-project__content">
                <?php
                    $terms = wp_get_post_terms( get_the_ID(), 'projects' );
                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) { ?>
                    <div class="about-project__head">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/project/decor.svg" alt="">        
                        <?php 
                            foreach ( $terms as $term ) {
                                echo esc_html( $term->name );
                            }
                        ?>
                    </div>
                <?php } ?>
                <h1 class="about-project__title title-big"><?php the_title(); ?></h1>
                <div class="about-project__descr">
                    <?php echo get_sub_field( 'description' ); ?>
                </div>
            </div>
            <div class="about-project__right">
                <?php if ( get_sub_field( 'image' ) ) { ?>
                <div class="about-project__image-mask">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/project/notebook.svg" alt="<?php the_title(); ?>">
                    <div class="about-project__image-ibg">
                        <img src="<?php the_sub_field( 'image' ); ?>" alt="<?php the_title(); ?>"/>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>


			
			