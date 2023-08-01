<?php

class WebFxTestPosttypes
{
    /**
     * WebFxTestPosttypes constructor.
     */
    public function __construct()
    {
        $this->registerHomePageCarousel();
        $this->registerServices();
        $this->registerHomeTeam();
        $this->registerVideoPost();
        $this->registerTestimonials();
    }

    protected function registerHomePageCarousel()
    {
        register_post_type( 'homepage_carousel',
            // CPT Options
            array(
                'labels' => array(
                    'name' => __( 'Homepage Carousel' ),
                    'singular_name' => __( 'Homepage Carousel' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'homepage_carousel'),
                'supports' => array('title', 'editor', 'thumbnail'),
                'show_in_rest' => true,
            )
        );
    }

    protected function registerServices()
    {
        register_post_type( 'services',
            // CPT Options
            array(
                'labels' => array(
                    'name' => __( 'Services' ),
                    'singular_name' => __( 'Service' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'services'),
                'supports' => array('title', 'editor', 'thumbnail'),
                'show_in_rest' => true,
            )
        );
    }

    protected function registerHomeTeam()
    {
        register_post_type( 'home_team',
            // CPT Options
            array(
                'labels' => array(
                    'name' => __( 'Home Team' ),
                    'singular_name' => __( 'Team Member' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'home-team'),
                'supports' => array('title', 'editor', 'thumbnail'),
                'show_in_rest' => true,
            )
        );
    }

    protected function registerVideoPost() {
        // Set the labels for the video post type
        $labels = array(
            'name' => __( 'Videos', 'my-theme' ),
            'singular_name' => __( 'Video', 'my-theme' ),
            'add_new' => __( 'Add New', 'my-theme' ),
            'add_new_item' => __( 'Add New Video', 'my-theme' ),
            'edit_item' => __( 'Edit Video', 'my-theme' ),
            'new_item' => __( 'New Video', 'my-theme' ),
            'view_item' => __( 'View Video', 'my-theme' ),
            'search_items' => __( 'Search Videos', 'my-theme' ),
            'not_found' => __( 'No videos found', 'my-theme' ),
            'not_found_in_trash' => __( 'No videos found in trash', 'my-theme' ),
        );

        // Set the arguments for the video post type
        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            // Add support for title, editor, and custom fields
            // You can use the editor to upload or embed videos
            // You can use custom fields to store additional information about the videos
            'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
        );

        // Register the video post type
        register_post_type( 'video', $args );
    }

    protected function registerTestimonials() {
        register_post_type( 'testimonials',
            // CPT Options
            array(
                'labels' => array(
                    'name' => __( 'Testimonials' ),
                    'singular_name' => __( 'Testimonial' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'testimonials'),
                'supports' => array('title', 'editor', 'thumbnail'),
                'show_in_rest' => true,
            )
        );
    }
}