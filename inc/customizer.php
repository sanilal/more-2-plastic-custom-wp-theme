<?php

/**
* Create Logo Setting and Upload Control
*/
function moretoplastic_new_customizer_settings($wp_customize) {
    // add a setting for the site logo
    $wp_customize->add_setting('moretoplastic_logo');
    // Add a control to upload the logo
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'moretoplastic_logo',
    array(
    'label' => 'Upload Logo',
    'section' => 'title_tagline',
    'settings' => 'moretoplastic_logo',
    ) ) );
    $wp_customize->add_section('moretoplastic_footer', array(
    'title' => 'Footer',
    'description' => '',
    'priority' => 120,
    ));

    $wp_customize->add_setting('moretoplastic_footer_logo');
    // Add a control to upload the logo
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'moretoplastic_footer_logo',
    array(
    'label' => 'Upload Logo',
    'section' => 'moretoplastic_footer',
    'settings' => 'moretoplastic_footer_logo',
    ) ) );

    

    }
    add_action('customize_register', 'moretoplastic_new_customizer_settings');




   
