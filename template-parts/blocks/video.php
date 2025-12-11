<section class="video section">
    <div class="video__container-big">
        <div class="section__decor-block">
            <h2 class="section__left-title">
                <?php echo get_sub_field( 'title' ); ?>
            </h2>
            <div class="section__image">
                <svg data-animate2 width="144" height="557" viewBox="0 0 144 557" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M44.5 340.351L18.1447 366.707C8.76783 376.083 3.5 388.801 3.5 402.062V421.851" stroke="#0075FF" stroke-width="2.5" />
                    <path d="M92 209.351L63.5178 231.837C51.5073 241.319 44.5 255.779 44.5 271.081V469.351" stroke="#0075FF" stroke-width="2.5" />
                    <path d="M44.0454 473.921C45.175 473.921 46.0908 473.01 46.0908 471.886C46.0908 470.762 45.175 469.851 44.0454 469.851C42.9158 469.851 42 470.762 42 471.886C42 473.01 42.9158 473.921 44.0454 473.921Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                    <path d="M4.04539 425.921C5.17502 425.921 6.09077 425.01 6.09077 423.886C6.09077 422.762 5.17502 421.851 4.04539 421.851C2.91575 421.851 2 422.762 2 423.886C2 425.01 2.91575 425.921 4.04539 425.921Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                    <path d="M92 98.3513L120.482 120.837C132.493 130.319 139.5 144.779 139.5 160.081V358.351" stroke="#0075FF" stroke-width="2.5" />
                    <path d="M139.955 362.921C138.825 362.921 137.909 362.01 137.909 360.886C137.909 359.762 138.825 358.851 139.955 358.851C141.084 358.851 142 359.762 142 360.886C142 362.01 141.084 362.921 139.955 362.921Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                    <path d="M91.9999 0.851318L92 546.351" stroke="#0075FF" stroke-width="2.5" />
                    <path d="M92.5 555.351C94.9853 555.351 97 553.337 97 550.851C97 548.366 94.9853 546.351 92.5 546.351C90.0147 546.351 88 548.366 88 550.851C88 553.337 90.0147 555.351 92.5 555.351Z" stroke="#0075FF" stroke-width="2.5" stroke-miterlimit="10" />
                </svg>

            </div>
        </div>
        <h2 class="section__mob-title">
            <?php echo get_sub_field( 'title' ); ?>
        </h2>
        <div class="video__wrap">
            <div class="video__block-decor">
                <img src="<?php echo get_template_directory_uri(); ?>/img/svg/play-decor.svg" alt="">
            </div>
            <div class="video__block">
                <iframe width="560" height="315" data-src="https://www.youtube.com/embed/<?php echo get_sub_field( 'youtube_video_id' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="video__poster">
                    <button class="video__play">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/svg/play.svg" alt="">
                    </button>

                </div>


            </div>
        </div>
    </div>
</section>