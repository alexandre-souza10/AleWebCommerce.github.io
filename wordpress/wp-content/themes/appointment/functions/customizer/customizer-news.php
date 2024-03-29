<?php

function appointment_news_customizer($wp_customize) {

//Index-news Section
    $wp_customize->add_panel('appointment_news_setting', array(
        'priority' => 600,
        'capability' => 'edit_theme_options',
        'title' => esc_html__('Latest News Settings', 'appointment'),
    ));

    $wp_customize->add_section(
            'news_section_settings',
            array(
                'title' => esc_html__('Latest News Settings', 'appointment'),
                'description' => '',
                'panel' => 'appointment_news_setting',)
    );


    //Hide Index Service Section

    $wp_customize->add_setting(
            'appointment_options[home_blog_enabled]',
            array(
                'default' => '',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'appointment_sanitize_checkbox',
                'type' => 'option'
            )
    );
    $wp_customize->add_control(
            'appointment_options[home_blog_enabled]',
            array(
                'label' => esc_html__('Hide news section from homepage', 'appointment'),
                'section' => 'news_section_settings',
                'type' => 'checkbox',
            )
    );

    // hide meta content
    $wp_customize->add_setting(
            'appointment_options[home_meta_section_settings]',
            array(
                'default' => 0,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'appointment_sanitize_checkbox',
                'type' => 'option',
            )
    );
    $wp_customize->add_control(
            'appointment_options[home_meta_section_settings]',
            array(
                'label' => esc_html__('Hide post meta from news section', 'appointment'),
                'section' => 'news_section_settings',
                'type' => 'checkbox',
            )
    );

    // add section to manage News
    $wp_customize->add_setting(
            'appointment_options[blog_heading]',
            array(
                'default' => 'Proin euismod',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'appointment_news_sanitize_html',
                'type' => 'option',
            )
    );
    $wp_customize->add_control('appointment_options[blog_heading]', array(
        'label' => esc_html__('Title', 'appointment'),
        'section' => 'news_section_settings',
        'type' => 'text',));


    $wp_customize->add_setting(
            'appointment_options[blog_description]',
            array(
                'default' => 'Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid non proident, sunt in culpa qui official deserunt mollit anim id est laborum.',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'appointment_news_sanitize_html',
                'type' => 'option',
            )
    );
    $wp_customize->add_control('appointment_options[blog_description]', array(
        'label' => esc_html__('Description', 'appointment'),
        'section' => 'news_section_settings',
        'type' => 'text',));


    // add section to manage featured Latest news on category basis	
    $wp_customize->add_setting(
            'appointment_options[blog_selected_category_id]',
            array(
                'capability' => 'edit_theme_options',
                'default' => 1,
                'sanitize_callback' => 'appointment_select2_text_sanitization',
                'type' => 'option',
            )
    );
    $wp_customize->add_control(new Appointment_category_dropdown_customControl($wp_customize, 'appointment_options[blog_selected_category_id]', array(
                'label' => esc_html__('Select Category For Latest News', 'appointment'),
                'section' => 'news_section_settings',
                'settings' => 'appointment_options[blog_selected_category_id]',
                'input_attrs' => array(
                    'placeholder' => esc_html__('Select category', 'appointment'),
                    'multiselect' => true,
                ),
    )));



    //Select number of latest news on front page

    $wp_customize->add_setting(
            'appointment_options[post_display_count]',
            array(
                'type' => 'option',
                'default' => 4,
                'sanitize_callback' => 'appointment_sanitize_select',
            )
    );

    $wp_customize->add_control(
            'appointment_options[post_display_count]',
            array(
                'type' => 'select',
                'label' => esc_html__('Select Number Of Posts', 'appointment'),
                'section' => 'news_section_settings',
                'choices' => array(2 => 2, 4 => 4, 6 => 6, 8 => 8, 10 => 10, 12 => 12, 14 => 14, 16 => 16),
    ));
}

add_action('customize_register', 'appointment_news_customizer');

function appointment_news_sanitize_html($input) {
    return wp_kses_post(force_balance_tags($input));
}
