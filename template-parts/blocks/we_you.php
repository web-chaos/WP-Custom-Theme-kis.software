<?php if ( have_rows( 'lists' ) ) { ?>
    <section class="we-you">
        <div class="we-you__container2">
            <div class="we-you__row">
                <?php while ( have_rows( 'lists' ) ) { the_row(); ?>
                    <div class="we-you__item">
                        <h2 class="we-you__title"><?php echo get_sub_field( 'title' ); ?></h2>
                        <div class="we-you__text">
                            <p><?php echo get_sub_field( 'description' ); ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>