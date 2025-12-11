<section class="s-related-blogs">
    <div class="s-related-blogs__container3">
        <h2 class="title">
            <?php echo get_sub_field( 'title' ); ?>
        </h2>
        <?php $blogs = get_sub_field( 'blogs' ); ?>
        <?php if ( $blogs ) { ?>
            <div class="s-related-blogs__slider swiper">
                <div class="s-related-blogs__wrapper swiper-wrapper">
                    
                <?php foreach ( $blogs as $post ) { ?>
					<?php setup_postdata( $post );  ?>
                    <div class="s-related-blogs__slide swiper-slide">
                        <?php get_template_part( 'template-parts/content', 'article-block' ); ?>
                    </div>
                <?php } ?>
                        
                    
                </div>
                <div class="s-related-blogs__navigation navigation">
                    <div class="navigation__arrows">
                        <button class="navigation__arrow s-related-blogs__prev">
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>img/icons/icons.svg#arrow1"></use>
                            </svg>
                        </button>
                        <button class="navigation__arrow s-related-blogs__next">
                            <svg>
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#arrow2"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="navigation__pagination-circle s-related-blogs__pagination">
                    </div>
                </div>
            </div>
        <?php wp_reset_postdata(); ?>
        <?php } ?>
    </div>
</section>				