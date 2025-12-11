<?php 
function customize_kiss_register($wp_customize) {
    $wp_customize->add_setting('additional_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'additional_logo', array(
        'label'    => __('Custom logo light', 'kiss'),
        'section'  => 'title_tagline',
        'settings' => 'additional_logo',
        'priority' => 9,
    )));

    $wp_customize->add_setting('custom_text_field', array(
        'default'           => '',
        // 'sanitize_callback' => 'kiss_allow_svg',
    ));

    $wp_customize->add_control('custom_text_field', array(
        'label'    => __('SVG logo', 'kiss'),
        'section'  => 'title_tagline',
        'type'     => 'textarea',
        'priority' => 10,
    ));
}

add_action('customize_register', 'customize_kiss_register');