<section class="timeline">
    <div class="timeline__container2">
        <h2 class="title tt-l timeline__title"><?php echo get_sub_field( 'title' ); ?></h2>
        <?php if ( have_rows( 'timeline_list' ) ) { ?>
            <div class="timeline__items">
                <?php
                $counter = 0;
                while ( have_rows( 'timeline_list' ) ) { 
                    the_row(); 
                    $counter++;
                    if ($counter == 1) {  ?>
                        <div class="timeline__top">
                            <div class="timeline__item timeline__item_first">
                                <div class="timeline__date"><?php echo get_sub_field( 'year' ); ?></div>
                                <div class="timeline__text">
                                    <p><?php echo get_sub_field( 'description' ); ?></p>
                                </div>
                            </div>
                        <?php } elseif ($counter == 2) { ?>
                            <div class="timeline__item timeline__item_third">
                                <div class="timeline__date"><?php echo get_sub_field( 'year' ); ?></div>
                                <div class="timeline__text">
                                    <p><?php echo get_sub_field( 'description' ); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__line"></div> 
                        <?php } elseif ($counter == 3) { ?>
                            <div class="timeline__bottom">
                                <div data-da=".timeline__top,768,1" class="timeline__item timeline__item_second">
                                    <div class="timeline__date"><?php echo get_sub_field( 'year' ); ?></div>
                                    <div class="timeline__text">
                                        <p><?php echo get_sub_field( 'description' ); ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php } ?>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>