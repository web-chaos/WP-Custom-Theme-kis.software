<section id="needs" class="needs">
    <div class="container__container3">
        <div class="needs__head">
            <h2 class="title text-blue"><?php echo get_sub_field( 'title' ); ?></h2>

            <?php $link = get_sub_field( 'link' ); ?>
			<?php if ( $link ) { ?>
                <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class=" s-converse__link button s-button <?php if ( get_sub_field( 'full_blue_style' ) == 1 ) echo 's-button--light'; ?>">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M35.4536 28.6442C35.1875 28.9102 34.8234 29.0783 34.4033 29.0783C33.591 29.0783 32.9189 28.4061 32.9189 27.5939L32.9189 12.0776L17.4027 12.0777C16.5904 12.0777 15.9182 11.4055 15.9182 10.5933C15.9182 9.78104 16.5904 9.10886 17.4027 9.10886L34.4033 9.10883C35.2155 9.10883 35.8877 9.78101 35.8877 10.5932L35.8877 27.5939C35.8877 28.014 35.7196 28.3781 35.4536 28.6442Z" fill="#0075FF"/><path d="M35.2154 11.8803L11.647 35.4487C11.0728 36.0229 10.1205 36.0229 9.54638 35.4487C8.97222 34.8746 8.97222 33.9223 9.54638 33.3482L33.1148 9.77972C33.689 9.20557 34.6412 9.20556 35.2154 9.77972C35.7895 10.3539 35.7895 11.3061 35.2154 11.8803Z" fill="#0075FF"/></svg>
                    <?php echo esc_html( $link['title'] ); ?>
                </a>
			<?php } ?>
        </div>
        <div class="needs__wrapper">
            <?php $image = get_sub_field( 'image' ); ?>
			<?php if ( $image ) { ?>
                <div class="needs__image">
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                </div>
			<?php } ?>
            <div class="needs__content">
                <div class="needs__content--title"><?php echo get_sub_field( 'list_title' ); ?></div>
                <?php
                    $list = count(get_sub_field('list'));
                    $half = ceil($list / 2);
                ?>
                <?php if ( have_rows( 'list' ) ) { ?>
                    <ul class="needs__content--list">
                        <?php $count = 0; while ( have_rows( 'list' ) ) { the_row(); $count++; ?>
                            <li class="<?php echo $count <= $half ? 'col-order-left' : 'col-order-right'; ?>">
                                <span><?php echo get_sub_field( 'description' ); ?></span>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

