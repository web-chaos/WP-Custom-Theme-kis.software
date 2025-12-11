<section class="s-importance-services">
    <div class="s-importance-services__container3">
        <h2 class="title">
            <?php echo get_sub_field( 'title' ); ?>
        </h2>
        <?php if ( have_rows( 'list' ) ) { ?>
            <div class="s-importance-services__items">
                <?php while ( have_rows( 'list' ) ) { the_row(); ?>
                    <div class="s-importance-services__item">
                        <h4 class="s-importance-services__item-title">
                            <?php echo get_sub_field( 'title' ); ?>
                        </h4>
                        <div class="s-importance-services__item-text">
                            <p><?php echo get_sub_field( 'description' ); ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>


