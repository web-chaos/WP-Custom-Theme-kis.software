<?php if ( have_rows( 'industry' ) ) { ?>
    <div class="s-industry-growth">
        <div class="s-industry-growth__container3">
            <div class="s-industry-growth__items">
                <?php while ( have_rows( 'industry' ) ) { the_row(); ?>
                    <div class="s-industry-growth__item">
                        <div class="s-industry-growth__item-digit"><?php echo get_sub_field( 'number' ); ?></div>
                        <div class="s-industry-growth__item-text"><?php echo get_sub_field( 'description' ); ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>