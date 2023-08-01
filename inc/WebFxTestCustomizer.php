<?php


/**
 * Class Class_WebFx_Test_Customizer
 */
class WebFxTestCustomizer
{
    /**
     * Class_WebFx_Test_Customizer constructor.
     */
    public function __construct()
    {
        // Hook the function to customize_register action
        add_action('customize_register', array($this, 'register'));
    }

    /**
     * @param $wp_customize
     */
    public function headAreaOptions($wp_customize)
    {
        $wp_customize->add_section('webfx_head_section', array(
            'title' => __('WebFx Head Options', 'webfx-test-head'),
            'priority' => 30,
        ));

        $wp_customize->add_setting('webfx_test_top_banner_text', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_top_banner_text', array(
            'label' => __('Top Banner Text', 'webfx-test-theme-top-banner-text'),
            'section' => 'webfx_head_section',
            'settings' => 'webfx_test_top_banner_text',
        )));

        $wp_customize->add_setting('webfx_test_header_contact_label', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_header_contact_label', array(
            'label' => __('Header Contact Label', 'webfx-test-theme-header-contact-text'),
            'section' => 'webfx_head_section',
            'settings' => 'webfx_test_header_contact_label',
        )));

        $wp_customize->add_setting('webfx_test_header_contact_number', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_header_contact_number', array(
            'label' => __('Header Contact Number', 'webfx-test-theme-header-contact-number'),
            'section' => 'webfx_head_section',
            'settings' => 'webfx_test_header_contact_number',
        )));

        // BUtton 1
        $wp_customize->add_setting('webfx_test_header_btn_1_label', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_header_btn_1_label', array(
            'label' => __('Header Button 1 Text', 'webfx-test-theme-header-btn1-label'),
            'section' => 'webfx_head_section',
            'settings' => 'webfx_test_header_btn_1_label',
        )));

        $wp_customize->add_setting('webfx_test_header_btn_1_link', array(
            'default' => '#',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_header_btn_1_link', array(
            'label' => __('Header Button 1 Link', 'webfx-test-theme-header-btn1-link'),
            'section' => 'webfx_head_section',
            'settings' => 'webfx_test_header_btn_1_link',
        )));

        // Button 2
        $wp_customize->add_setting('webfx_test_header_btn_2_label', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_header_btn_2_label', array(
            'label' => __('Header Button 2 Text', 'webfx-test-theme-header-btn1-label'),
            'section' => 'webfx_head_section',
            'settings' => 'webfx_test_header_btn_2_label',
        )));

        $wp_customize->add_setting('webfx_test_header_btn_2_link', array(
            'default' => '#',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_header_btn_2_link', array(
            'label' => __('Header Button 2 Link', 'webfx-test-theme-header-btn2-link'),
            'section' => 'webfx_head_section',
            'settings' => 'webfx_test_header_btn_2_link',
        )));
    }

    /**
     * @param $wp_customize
     */
    public function welcomeAreaOptions($wp_customize)
    {
        $wp_customize->add_section('webfx_welcome_section', array(
            'title' => __('WebFx Welcome Options', 'webfx-test-welcome'),
            'priority' => 30,
        ));

        $wp_customize->add_setting('webfx_test_welcome_side_image', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'webfx_test_welcome_side_image', array(
            'label' => __('Subheading', 'webfx-test-theme-welcome-sideimage'),
            'section' => 'webfx_welcome_section',
            'settings' => 'webfx_test_welcome_side_image',
        )));

        $wp_customize->add_setting('webfx_test_welcome_side_image_note', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_welcome_side_image_note', array(
            'label' => __('Side Image Note', 'webfx-test-theme-welcome-sideimage-note'),
            'section' => 'webfx_welcome_section',
            'settings' => 'webfx_test_welcome_side_image_note',
        )));

        $wp_customize->add_setting('webfx_test_welcome_text_subheading', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_welcome_text_subheading', array(
            'label' => __('Subheading', 'webfx-test-theme-welcome-subhead'),
            'section' => 'webfx_welcome_section',
            'settings' => 'webfx_test_welcome_text_subheading',
        )));

        $wp_customize->add_setting('webfx_test_welcome_text_heading', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_welcome_text_heading', array(
            'label' => __('Heading', 'webfx-test-theme-welcome-heading'),
            'section' => 'webfx_welcome_section',
            'settings' => 'webfx_test_welcome_text_heading',
        )));

        $wp_customize->add_setting('webfx_test_welcome_text_description', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_kses_post',
        ));
        $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'webfx_test_welcome_text_description', array(
            'label' => __('Description', 'webfx-test-theme-welcome-description'),
            'section' => 'webfx_welcome_section',
            'settings' => 'webfx_test_welcome_text_description',
        )));

        $wp_customize->add_setting('webfx_test_welcome_button_text', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_welcome_button_text', array(
            'label' => __('Heading', 'webfx-test-theme-welcome-button-text'),
            'section' => 'webfx_welcome_section',
            'settings' => 'webfx_test_welcome_button_text',
        )));

        $wp_customize->add_setting('webfx_test_welcome_button_url', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_welcome_button_url', array(
            'label' => __('Heading', 'webfx-test-theme-welcome-button-url'),
            'section' => 'webfx_welcome_section',
            'settings' => 'webfx_test_welcome_button_url',
        )));
    }

    /**
     * @param $wp_customize
     */
    public function servicesSection1Area($wp_customize)
    {
        $wp_customize->add_section('webfx_services_section_1', array(
            'title' => __('WebFx Services Section 1', 'webfx-test-services-section'),
            'priority' => 30,
        ));

        $wp_customize->add_setting('webfx_test_services_section_subhead', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_services_section_subhead', array(
            'label' => __('Subheading', 'webfx-test-theme-section-2-subheading'),
            'section' => 'webfx_services_section_1',
            'settings' => 'webfx_test_services_section_subhead',
        )));

        $wp_customize->add_setting('webfx_test_services_section_heading', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_services_section_heading', array(
            'label' => __('Heading', 'webfx-test-theme-section-2-heading'),
            'section' => 'webfx_services_section_1',
            'settings' => 'webfx_test_services_section_heading',
        )));

        $wp_customize->add_setting('webfx_test_services_section_description', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_kses_post',
        ));
        $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'webfx_test_services_section_description', array(
            'label' => __('Description', 'webfx-test-theme-services-description'),
            'section' => 'webfx_services_section_1',
            'settings' => 'webfx_test_services_section_description',
        )));

        $wp_customize->add_setting('webfx_test_services_section_button_text', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_services_section_button_text', array(
            'label' => __('Button Label', 'webfx-test-theme-services-button-text'),
            'section' => 'webfx_services_section_1',
            'settings' => 'webfx_test_services_section_button_text',
        )));

        $wp_customize->add_setting('webfx_test_services_section_button_url', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_services_section_button_url', array(
            'label' => __('Button Link', 'webfx-test-theme-services-button-url'),
            'section' => 'webfx_services_section_1',
            'settings' => 'webfx_test_services_section_button_url',
        )));
    }

    /**
     * @param $wp_customize
     */
    public function servicesSection2Area($wp_customize)
    {
        $wp_customize->add_section('webfx_services_section_2', array(
            'title' => __('WebFx Services Section 2', 'webfx-test-services-section'),
            'priority' => 30,
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'webfx_test_services_section_2_left_image', array(
            'label' => __('Image Left', 'webfx-test-theme-services-description'),
            'section' => 'webfx_services_section_2',
            'settings' => 'webfx_test_services_section_2_left_image',
        )));

        $wp_customize->add_setting('webfx_test_services_section_2_subhead', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_services_section_2_subhead', array(
            'label' => __('Subheading', 'webfx-test-theme-section-2-subheading'),
            'section' => 'webfx_services_section_2',
            'settings' => 'webfx_test_services_section_2_subhead',
        )));

        $wp_customize->add_setting('webfx_test_services_section_2_heading', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_services_section_2_heading', array(
            'label' => __('Heading', 'webfx-test-theme-section-2-heading'),
            'section' => 'webfx_services_section_2',
            'settings' => 'webfx_test_services_section_2_heading',
        )));

        $wp_customize->add_setting('webfx_test_services_section_2_image_1', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'webfx_test_services_section_2_image_1', array(
            'label' => __('Image 1', 'webfx-test-theme-services-description'),
            'section' => 'webfx_services_section_2',
            'settings' => 'webfx_test_services_section_2_image_1',
        )));
        $wp_customize->add_setting('webfx_test_services_section_2_image_1_name', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_services_section_2_image_1_name', array(
            'label' => __('Image 1 Name', 'webfx-test-theme-section-2-heading'),
            'section' => 'webfx_services_section_2',
            'settings' => 'webfx_test_services_section_2_image_1_name',
        )));

        $wp_customize->add_setting('webfx_test_services_section_2_image_2', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'webfx_test_services_section_2_image_2', array(
            'label' => __('Image 2', 'webfx-test-theme-services-description'),
            'section' => 'webfx_services_section_2',
            'settings' => 'webfx_test_services_section_2_image_2',
        )));
        $wp_customize->add_setting('webfx_test_services_section_2_image_2_name', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_services_section_2_image_2_name', array(
            'label' => __('Image 2 Name', 'webfx-test-theme-section-2-heading'),
            'section' => 'webfx_services_section_2',
            'settings' => 'webfx_test_services_section_2_image_2_name',
        )));

        $wp_customize->add_setting('webfx_test_services_section_2_description', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'webfx_test_services_section_2_description', array(
            'label' => __('Description', 'webfx-test-theme-services-description'),
            'section' => 'webfx_services_section_2',
            'settings' => 'webfx_test_services_section_2_description',
        )));

        $wp_customize->add_setting('webfx_test_services_section_2_button_text', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_kses_post',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_services_section_2_button_text', array(
            'label' => __('Button Label', 'webfx-test-theme-services-button-text'),
            'section' => 'webfx_services_section_2',
            'settings' => 'webfx_test_services_section_2_button_text',
        )));

        $wp_customize->add_setting('webfx_test_services_section_2_button_url', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_services_section_2_button_url', array(
            'label' => __('Button Link', 'webfx-test-theme-services-button-url'),
            'section' => 'webfx_services_section_2',
            'settings' => 'webfx_test_services_section_2_button_url',
        )));
    }

    /**
     * @param $wp_customize
     */
    public function ourTeamAreaOptions($wp_customize)
    {
        $wp_customize->add_section('webfx_test_our_team_section', array(
            'title' => __('WebFx Our Team', 'webfx-test-section-2'),
            'priority' => 30,
        ));

        $wp_customize->add_setting('webfx_test_our_team_background', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'webfx_test_our_team_background', array(
            'label' => __('Background Image', 'webfx-test-theme-team-subhead'),
            'section' => 'webfx_test_our_team_section',
            'settings' => 'webfx_test_our_team_background',
        )));

        $wp_customize->add_setting('webfx_test_our_team_subhead', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_our_team_subhead', array(
            'label' => __('Subheading', 'webfx-test-theme-team-subhead'),
            'section' => 'webfx_test_our_team_section',
            'settings' => 'webfx_test_our_team_subhead',
        )));

        $wp_customize->add_setting('webfx_test_our_team_head', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_our_team_head', array(
            'label' => __('Heading', 'webfx-test-theme-team-head'),
            'section' => 'webfx_test_our_team_section',
            'settings' => 'webfx_test_our_team_head',
        )));
    }

    /**
     * @param $wp_customize
     */
    public function testimonialsOptions($wp_customize)
    {
        $wp_customize->add_section('webfx_test_testimonials_section', array(
            'title' => __('WebFx Testimonials', 'webfx-test-section-2'),
            'priority' => 30,
        ));

        $wp_customize->add_setting('webfx_test_testimonial_title', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_testimonial_title', array(
            'label' => __('Title', 'webfx-test-theme-team-subhead'),
            'section' => 'webfx_test_testimonials_section',
            'settings' => 'webfx_test_testimonial_title',
        )));
    }

    /**
     * @param $wp_customize
     */
    public function companyOptions($wp_customize)
    {
        $wp_customize->add_section('webfx_test_company_section', array(
            'title' => __('WebFx Company Info', 'webfx-test-section-2'),
            'priority' => 30,
        ));

        $wp_customize->add_setting('webfx_test_company_address', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'webfx_test_company_address', array(
            'label' => __('Address', 'webfx-test-theme-team-subhead'),
            'section' => 'webfx_test_company_section',
            'settings' => 'webfx_test_company_address',
        )));

        $wp_customize->add_setting('webfx_test_hours_of_operation', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_kses_post',
        ));
        $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'webfx_test_hours_of_operation', array(
            'label' => __('Hours of operations', 'webfx-test-theme-team-subhead'),
            'section' => 'webfx_test_company_section',
            'settings' => 'webfx_test_hours_of_operation',
        )));

        $wp_customize->add_setting('webfx_test_company_award_1', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'webfx_test_company_award_1', array(
            'label' => __('Award 1', 'webfx-test-theme-team-subhead'),
            'section' => 'webfx_test_company_section',
            'settings' => 'webfx_test_company_award_1',
        )));

        $wp_customize->add_setting('webfx_test_company_award_2', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'webfx_test_company_award_2', array(
            'label' => __('Award 2', 'webfx-test-theme-team-subhead'),
            'section' => 'webfx_test_company_section',
            'settings' => 'webfx_test_company_award_2',
        )));
    }

    /**
     * @param $wp_customize
     */
    public function register($wp_customize)
    {
        $this->headAreaOptions($wp_customize);
        $this->welcomeAreaOptions($wp_customize);
        $this->servicesSection1Area($wp_customize);
        $this->ourTeamAreaOptions($wp_customize);
        $this->servicesSection2Area($wp_customize);
        $this->testimonialsOptions($wp_customize);
        $this->companyOptions($wp_customize);
    }
}