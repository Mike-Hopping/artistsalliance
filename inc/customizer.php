<?php
/**
 * Created by PhpStorm.
 * User: 845856208
 * Date: 16/04/2018
 * Time: 1:20 PM
 */

function artistsalliance_customize_register($wp_customize){
//-------------About--------------//
    //About Text
    $wp_customize->add_section('artistsalliance_about_section',
        array(
            'title' =>__('About'),
            'priority' => 30
        ));
    $wp_customize->add_setting('artistsalliance_about_text', array());
    $wp_customize->add_control('artistsalliance_about_text_ctrl', array(
        'type' => 'textarea',
        'section' => 'artistsalliance_about_section',
        'label' => __('About Us Text'),
        'settings' => 'artistsalliance_about_text'
        )
    );

    //About Image
    $wp_customize->add_setting('artistsalliance_about_image', array());
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'artistsalliance_about_image_ctrl',
        array(
            'section' => 'artistsalliance_about_section',
            'label' => __('About Image'),
            'settings' => 'artistsalliance_about_image'
            ),
//        Image crop
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'artistsalliance_about_image_crop',
                array(
            'section' => 'artistsalliance_about_section',
            'label' => __('Crop Image'),
                    'settings' => 'artistsalliance_about_image',
            'width' => 355,
            'height' => 200,
                            )))
        )
    );

    //Meet the team

    $wp_customize->add_section('artistsalliance_team_section',
        array(
            'title' =>__('Meet the team'),
            'priority' => 30
        ));
    $wp_customize->add_setting('artistsalliance_team_text', array());
    $wp_customize->add_control('artistsalliance_team_text_ctrl', array(
            'type' => 'textarea',
            'section' => 'artistsalliance_team_section',
            'label' => __('Meet The Team Text'),
            'settings' => 'artistsalliance_team_text'
        )
    );

    //Testimonials

    $wp_customize->add_section('artistsalliance_testimonials_section',
        array(
            'title' =>__('Testimonials'),
            'priority' => 30
        ));
    $wp_customize->add_setting('artistsalliance_testimonials_text', array());
    $wp_customize->add_control('artistsalliance_testimonials_text_ctrl', array(
            'type' => 'textarea',
            'section' => 'artistsalliance_testimonials_section',
            'label' => __('Testimonials Text'),
            'settings' => 'artistsalliance_testimonials_text'
        )
    );

    //Contact

    $wp_customize->add_section('artistsalliance_contact_section',
        array(
            'title' =>__('Contact'),
            'priority' => 30
        ));
    $wp_customize->add_setting('artistsalliance_contact_text', array());
    $wp_customize->add_control('artistsalliance_contact_text_ctrl', array(
            'type' => 'textarea',
            'section' => 'artistsalliance_contact_section',
            'label' => __('Contact Text'),
            'settings' => 'artistsalliance_contact_text'
        )
    );

    //Home

    $wp_customize->add_section('artistsalliance_home_statement_section',
        array(
            'title' =>__('Home Statement'),
            'priority' => 30
        ));
    $wp_customize->add_setting('artistsalliance_home_statement_text', array());
    $wp_customize->add_control('artistsalliance_home_statement_text_ctrl', array(
            'type' => 'textarea',
            'section' => 'artistsalliance_home_statement_section',
            'label' => __('Home Mission Statement Text'),
            'settings' => 'artistsalliance_home_statement_text'
            )
        );      
    $wp_customize->add_setting('artistsalliance_home_statement_header', array());
    $wp_customize->add_control('artistsalliance_home_statement_header_ctrl', array(
            'type' => 'textarea',
            'section' => 'artistsalliance_home_statement_section',
            'label' => __('Home Mission Statement header'),
            'settings' => 'artistsalliance_home_statement_header'
        )
    );
    $wp_customize->add_section('artistsalliance_home_about_section',
    array(
        'title' =>__('Home About'),
        'priority' => 30
    ));
    $wp_customize->add_setting('artistsalliance_home_about_text', array());
    $wp_customize->add_control('artistsalliance_home_about_text_ctrl', array(
        'type' => 'textarea',
        'section' => 'artistsalliance_home_about_section',
        'label' => __('Home About Text'),
        'settings' => 'artistsalliance_home_about_text'
        )
    );
    $wp_customize->add_section('artistsalliance_home_donate_section',
    array(
        'title' =>__('Home Donate'),
        'priority' => 30
    ));
    $wp_customize->add_setting('artistsalliance_home_donate_text', array());
    $wp_customize->add_control('artistsalliance_home_donate_text_ctrl', array(
        'type' => 'textarea',
        'section' => 'artistsalliance_home_donate_section',
        'label' => __('Home Donate Text'),
        'settings' => 'artistsalliance_home_donate_text'
        )
    );

    //Home Image 1

    $wp_customize->add_section('artistsalliance_home_statement_image_one_section',
        array(
            'title' =>__('Home Statement Image 1'),
            'priority' => 30
        ));
    $wp_customize->add_setting('artistsalliance_home_statement_image_one', array());
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'artistsalliance_home_statement_image_one_ctrl',
        array(
            'section' => 'artistsalliance_home_statement_image_one_section',
            'label' => __('Home Image 1'),
            'settings' => 'artistsalliance_home_statement_image_one'
        ),

        //Home Image 2

        $wp_customize->add_section('artistsalliance_home_statement_image_two_section',
            array(
                'title' =>__('Home Statement Image 2'),
                'priority' => 30
            ),
        $wp_customize->add_setting('artistsalliance_home_statement_image_two', array()),
        $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'artistsalliance_home_statement_image_two_ctrl',
        array(
            'section' => 'artistsalliance_home_statement_image_two_section',
            'label' => __('Home Image 2'),
            'settings' => 'artistsalliance_home_statement_image_two'
        )))
        )
    ));
    //----------------Products----------------//
}

add_action('customize_register', 'artistsalliance_customize_register');

?>