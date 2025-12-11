<section class="step">
    <div class="step__container2">
        <h2 class="step__title mb-70 title tt-l"><?php echo get_sub_field( 'title' ); ?></h2>
        <?php if ( have_rows( 'steps_list' ) ) { ?>
            <ul class="step__items">
                <?php while ( have_rows( 'steps_list' ) ) { the_row(); ?>
                    <li class="step__item <?php if ( get_sub_field( 'final_step' ) == 1 ) echo 'step__item_finish'; ?>">
                        <div class="step__icon">
                            <span class="step__digit"></span>
                            <?php if ( get_sub_field( 'final_step' ) == 1 ) { ?>
                                <div class="step__finish"><?php echo esc_html__( 'final step!', 'kiss' ); ?></div>
                            <?php } ?>
                        </div>
                        <div class="step__text">
                            <p><?php echo get_sub_field( 'description' ); ?></p>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</section>