<?php

function kiss_comment_form($args) {

    $args['title_reply'] = '<div id="reply-title" class="comment-form__title">' . esc_html__( 'Add your comment', 'kiss' ) . '</div>';

    $args['fields'] = array(
        'author' => '<div class="comment-form-author comment-form__items"><label for="author"><input class="input" required id="author" name="author" type="text" value="" size="30" placeholder="' . esc_html__( 'Enter your Name', 'kiss' ) . '" /></label></div>',
        'email'  => '<div class="comment-form-email comment-form__items"><label for="email"><input required class="input" id="email" name="email" type="text" value="" size="30" placeholder="' . esc_html__( 'Enter your Email', 'kiss' )  . '" /></label></div>',
    );

    $args['comment_field'] = '<div class="comment-form-comment comment-form__items"><label for="comment"><textarea required id="comment" name="comment" class="input" cols="45" rows="8" aria-required="true" placeholder="' . esc_html__( 'Your Comment', 'kiss' ) . '"></textarea></label></div>';

    $args['submit_button'] = '<button name="submit" type="submit" id="submit" class="submit comment-form__button"><span class="comment-form__icon"><svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.8472 18.46C22.6758 18.6314 22.4411 18.7397 22.1704 18.7397C21.6469 18.7397 21.2138 18.3065 21.2138 17.7831L21.2138 7.78375L11.2144 7.78377C10.691 7.78377 10.2578 7.35058 10.2578 6.82715C10.2578 6.30372 10.691 5.87053 11.2144 5.87053L22.1704 5.87051C22.6938 5.87051 23.127 6.3037 23.127 6.82713L23.127 17.7831C23.127 18.0538 23.0187 18.2885 22.8472 18.46Z"></path><path d="M22.6947 7.65652L7.50614 22.8451C7.13613 23.2151 6.52245 23.2151 6.15244 22.8451C5.78243 22.4751 5.78243 21.8614 6.15244 21.4914L21.341 6.30282C21.711 5.93281 22.3247 5.93281 22.6947 6.30282C23.0647 6.67283 23.0647 7.28651 22.6947 7.65652Z"></path></svg></span>' . esc_html__( 'Add comment', 'kiss' ) . '</button>';

    return $args;
}
add_filter('comment_form_defaults', 'kiss_comment_form');



function kiss_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class('comment__item item-comment'); ?> id="comment-<?php comment_ID(); ?>">
        <div class="item-comment__head">
            <div class="item-comment__avatar-ibg"><?php echo get_avatar($comment, 48); ?></div>
            <div class="item-comment__name"><?php comment_author(); ?></div>
            <time class="item-comment__date"><?php comment_date(); ?></time>
        </div>
        <div class="item-comment__content">
            <div class="item-comment__text"><?php comment_text(); ?></div>
            <?php comment_reply_link(array_merge($args, array('reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
        </div>
    </li>
    <?php
}




