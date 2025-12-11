<div class="spoller spoller_small">
    <div class="spoller__container2">
        <h2 class="title spoller__title"><?php echo get_sub_field( 'title' ); ?></h2>
        <?php if ( have_rows( 'spoller' ) ) { ?>
            <div data-spollers class="spoller__items">
                <?php while ( have_rows( 'spoller' ) ) { the_row(); ?>
                    <div class="spoller__item item-spoller">
                        <button data-spoller class="item-spoller__title">
                            <span><?php echo get_sub_field( 'title' ); ?></span>
                            <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7915 24.6025C12.7915 24.36 12.8808 24.1175 13.0723 23.926C13.4424 23.5559 14.055 23.5559 14.4251 23.926L21.4957 30.9966L28.5663 23.926C28.9364 23.5559 29.5491 23.5559 29.9192 23.926C30.2893 24.2962 30.2893 24.9088 29.9192 25.2789L22.1722 33.0259C21.802 33.396 21.1894 33.396 20.8193 33.0259L13.0723 25.2789C12.8808 25.0874 12.7915 24.845 12.7915 24.6025Z" fill="#0075FF" />
                                <path d="M20.5387 32.1333L20.5387 10.6535C20.5387 10.1302 20.9726 9.69629 21.4959 9.69629C22.0192 9.69629 22.4531 10.1302 22.4531 10.6535L22.4531 32.1333C22.4531 32.6566 22.0192 33.0906 21.4959 33.0906C20.9726 33.0906 20.5387 32.6566 20.5387 32.1333Z" fill="#0075FF" />
                            </svg>
                        </button>
                        <div class="item-spoller__body">
                            <div class="item-spoller__text">
                                <p><?php echo get_sub_field( 'description' ); ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>