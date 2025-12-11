<section class="want">
    <div class="want__container2">
        <div class="want__wrap">
            <div class="want__content">
                <h2 class="want__title"><?php echo get_sub_field( 'title' ); ?></h2>
                <div class="want__text">
                    <p><?php echo get_sub_field( 'description' ); ?></p>
                </div>
                <?php $link = get_sub_field( 'link' ); ?>
                <?php if ( $link ) { ?>
                    <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="want__link hero__button">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M35.4526 28.6447C35.1865 28.9107 34.8224 29.0788 34.4023 29.0788C33.5901 29.0788 32.9179 28.4066 32.9179 27.5944L32.9179 12.0781L17.4017 12.0782C16.5895 12.0782 15.9173 11.406 15.9173 10.5938C15.9173 9.78153 16.5895 9.10935 17.4017 9.10935L34.4023 9.10932C35.2145 9.10932 35.8867 9.7815 35.8867 10.5937L35.8867 27.5944C35.8867 28.0145 35.7186 28.3786 35.4526 28.6447Z" fill="#0075FF" />
                            <path d="M35.2159 11.8813L11.6474 35.4497C11.0733 36.0239 10.121 36.0239 9.54687 35.4497C8.97271 34.8755 8.97271 33.9233 9.54687 33.3491L33.1153 9.7807C33.6895 9.20654 34.6417 9.20654 35.2159 9.7807C35.79 10.3549 35.79 11.3071 35.2159 11.8813Z" fill="#0075FF" />
                        </svg>
                        <span><?php echo esc_html( $link['title'] ); ?></span>
                    </a>
                <?php } ?>
            </div>
            <?php if ( get_sub_field( 'image' ) ) { ?>
                <div class="want__image">
                    <img src="<?php the_sub_field( 'image' ); ?>" alt="<?php echo get_sub_field( 'title' ); ?>" />
                </div>
			<?php } ?>
        </div>
    </div>
</section>