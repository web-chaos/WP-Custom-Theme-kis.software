<section class="services section services_spoller">
    <div class="services__container-big">
        <div class="section__decor-block">
            
            <span class="section__left-title"><?php echo get_sub_field('title'); ?></span>
            
            <div class="section__image">
                <svg data-animate2="" width="70" height="627" viewBox="0 0 70 627" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path data-animate-path="" d="M32 271.5L18.1447 285.355C8.76784 294.732 3.5 307.45 3.5 320.711V386" stroke="#0075FF" stroke-width="2.5" style="stroke-dashoffset: 0.001; stroke-dasharray: 0px, 999999px;"></path>
                    <path data-animate-path="" d="M31.5 325L58.6831 367.716C63.7883 375.739 66.5 385.051 66.5 394.56V496.5" stroke="#0075FF" stroke-width="2.5" style="stroke-dashoffset: 0.001; stroke-dasharray: 0px, 999999px;"></path>
                    <path data-animate-path="" d="M32 0L32 616" stroke="#0075FF" stroke-width="2.5" style="stroke-dashoffset: 0.001; stroke-dasharray: 0px, 999999px;"></path>
                    <path data-animate-path="" d="M66.0454 501.07C67.175 501.07 68.0908 500.159 68.0908 499.035C68.0908 497.911 67.175 497 66.0454 497C64.9158 497 64 497.911 64 499.035C64 500.159 64.9158 501.07 66.0454 501.07Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" style="stroke-dashoffset: 0.001; stroke-dasharray: 0px, 999999px;"></path>
                    <path data-animate-path="" d="M4.04539 390.07C5.17502 390.07 6.09077 389.159 6.09077 388.035C6.09077 386.911 5.17502 386 4.04539 386C2.91575 386 2 386.911 2 388.035C2 389.159 2.91575 390.07 4.04539 390.07Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" style="stroke-dashoffset: 0.001; stroke-dasharray: 0px, 999999px;"></path>
                    <path data-animate-path="" d="M31.5 625C33.9853 625 36 622.985 36 620.5C36 618.015 33.9853 616 31.5 616C29.0147 616 27 618.015 27 620.5C27 622.985 29.0147 625 31.5 625Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" style="stroke-dashoffset: 0.001; stroke-dasharray: 0px, 999999px;"></path>
                </svg>
            </div>

        </div>

        <span class="section__mob-title"><?php echo get_sub_field('title'); ?></span>

        <div class="services__container3">
            <div class="services__wrap">
                <?php if ( have_rows('services_list') ) { ?>
                    <ul data-spollers data-one-spoller class="services__list _spoller-init">        
                        <?php $data = 1; while ( have_rows('services_list') ) { the_row(); $data++; ?>
                            <?php if ( get_row_layout() == 'item' ) { ?>
                                <?php $link_details = get_sub_field('link_details'); ?>
                                <li class="services__item">
                                    <div data-spoller class="services__title-spoller">
                                        <div class="services__digit">
                                        </div>
                                        <div class="services__text">
                                            <p style="cursor: pointer" data-id="<?php echo $data; ?>" class="direction_development_js"><?php if( $link_details ) echo esc_html( $link_details['title'] ); ?></p>
                                        </div>
                                    </div>

                                    <?php if ( have_rows('subitem') ) { ?>
                                        <div class="services__spoller-body" hidden>
                                            <?php if ( $link_details && isset($link_details['url']) ) { ?>
                                                <a href="<?php echo esc_url( $link_details['url'] ); ?>" class="services__button-link mob">
                                                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M35.4526 28.6447C35.1865 28.9107 34.8224 29.0788 34.4023 29.0788C33.5901 29.0788 32.9179 28.4066 32.9179 27.5944L32.9179 12.0781L17.4017 12.0782C16.5895 12.0782 15.9173 11.406 15.9173 10.5938C15.9173 9.78153 16.5895 9.10935 17.4017 9.10935L34.4023 9.10932C35.2145 9.10932 35.8867 9.7815 35.8867 10.5937L35.8867 27.5944C35.8867 28.0145 35.7186 28.3786 35.4526 28.6447Z" fill="#0075FF"></path>
                                                        <path d="M35.2159 11.8808L11.6474 35.4492C11.0733 36.0234 10.121 36.0234 9.54687 35.4492C8.97271 34.8751 8.97271 33.9228 9.54687 33.3486L33.1153 9.78021C33.6895 9.20605 34.6417 9.20605 35.2159 9.78021C35.79 10.3544 35.79 11.3066 35.2159 11.8808Z" fill="#0075FF"></path>
                                                    </svg>
                                                    <?php echo esc_html__('Details', 'kiss'); ?>
                                                </a>
                                            <?php } ?>
                                            <div class="services__spoller-row">
                                                <ul class="services__spoller-list">
                                                    <?php while ( have_rows('subitem') ) { the_row(); ?>
                                                        <?php $link = get_sub_field('link'); ?>
                                                        <?php if ( $link && isset($link['url']) ) { ?>
                                                            <li>
                                                                <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>">
                                                                    <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/web/arrow2.svg" alt="<?php echo esc_html( $link['title'] ); ?>">
                                                                    <?php echo esc_html( $link['title'] ); ?>
                                                                </a>
                                                            </li>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</section>