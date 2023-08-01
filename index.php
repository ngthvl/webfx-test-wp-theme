
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebFX_Test_Theme
 */

get_header();

$args = array(
    'post_type'   => array('homepage_carousel'),
    'post_status' => 'publish',
);
query_posts( $args );
?>

<!-- Home Slider Start -->
<div class="home-slider owl-carousel owl-theme">

    <?php
    if ( have_posts() ) :
        /* Start the Loop */
        while ( have_posts() ) :
            the_post();

            /*
             * Include the Post-Type-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
             */
            get_template_part( 'template-parts/content', get_post_type() );

        endwhile;
    endif;
    ?>
</div>
<!-- Home Slider End -->

<!-- Welcome Start -->
<div class="welcome-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-4 mobile-order2">
                <div class="welcome-box team-box">
                    <div class="team-image">
                        <img src="<?= get_theme_mod('webfx_test_welcome_side_image')?>" alt="Welcome" />
                    </div>
                    <div class="team-title">
                        <?= get_theme_mod('webfx_test_welcome_side_image_note')?>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="welcome-content">
                    <h4 class="optinal-h4"><?= get_theme_mod('webfx_test_welcome_text_subheading')?></h4>
                    <h1><?= get_theme_mod('webfx_test_welcome_text_heading')?></h1>
                    <p><?= get_theme_mod('webfx_test_welcome_text_description')?></p>
                    <a href="<?= get_theme_mod('webfx_test_welcome_button_url')?>" class="btn btn-primary"><?= get_theme_mod('webfx_test_welcome_button_text')?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Welcome End -->

<!-- Home Services Start -->
<div class="home-services line-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="service-content">
                    <h4 class="optinal-h4"><?= get_theme_mod('webfx_test_services_section_subhead')?></h4>
                    <h1><?= get_theme_mod('webfx_test_services_section_heading')?></h1>
                    <p><?= get_theme_mod('webfx_test_services_section_description')?></p>
                    <a href="<?= get_theme_mod('webfx_test_services_section_button_url')?>" class="btn btn-primary"><?= get_theme_mod('webfx_test_services_section_button_text')?></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <div class="service-owl owl-carousel owl-theme">
                        <?php
                        $args = array(
                            'post_type'   => array('services'),
                            'post_status' => 'publish',
                        );
                        query_posts( $args );
                        if ( have_posts() ) :
                            $counter=1;
                            /* Start the Loop */
                            while ( have_posts() ) :
                                if($counter == 1): ?><div class="item"><div class="row"><?php endif;
                                the_post();

                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', get_post_type() );
                                if($counter % 4 === 0): $counter=1; ?></div></div><?php else: $counter++; endif;

                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="d-lg-none">
                    <div class="service-owl owl-carousel owl-theme">
                        <div class="item">
                            <div class="service-box">
                                <div class="service-image">
                                    <img src="assets/images/service-img1.jpg" alt="Service" />
                                </div>
                                <div class="service-info">
                                    <div class="service-inner">
                                        <div class="service-icon comman-icon">
                                            <span class="icon-dental"></span>
                                        </div>
                                        <div class="service-title">Dental Cleaning</div>
                                        <a class="learn-more" href="#">learn more <span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box">
                                <div class="service-image">
                                    <img src="assets/images/service-img2.jpg" alt="Service" />
                                </div>
                                <div class="service-info">
                                    <div class="service-inner">
                                        <div class="service-icon comman-icon">
                                            <span class="icon-heart-paw"></span>
                                        </div>
                                        <div class="service-title">Wellness Plans</div>
                                        <a class="learn-more" href="#">learn more <span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box">
                                <div class="service-image">
                                    <img src="assets/images/service-img3.jpg" alt="Service" />
                                </div>
                                <div class="service-info">
                                    <div class="service-inner">
                                        <div class="service-icon comman-icon">
                                            <span class="icon-vaccines"></span>
                                        </div>
                                        <div class="service-title">Vaccinations & Immunizations</div>
                                        <a class="learn-more" href="#">learn more <span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box">
                                <div class="service-image">
                                    <img src="assets/images/service-img4.jpg" alt="Service" />
                                </div>
                                <div class="service-info">
                                    <div class="service-inner">
                                        <div class="service-icon comman-icon">
                                            <span class="icon-exotic-care"></span>
                                        </div>
                                        <div class="service-title">Exotic Pet Care</div>
                                        <a class="learn-more" href="#">learn more <span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box">
                                <div class="service-image">
                                    <img src="assets/images/service-img1.jpg" alt="Service" />
                                </div>
                                <div class="service-info">
                                    <div class="service-inner">
                                        <div class="service-icon comman-icon">
                                            <span class="icon-dental"></span>
                                        </div>
                                        <div class="service-title">Dental Cleaning</div>
                                        <a class="learn-more" href="#">learn more <span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box">
                                <div class="service-image">
                                    <img src="assets/images/service-img2.jpg" alt="Service" />
                                </div>
                                <div class="service-info">
                                    <div class="service-inner">
                                        <div class="service-icon comman-icon">
                                            <span class="icon-heart-paw"></span>
                                        </div>
                                        <div class="service-title">Wellness Plans</div>
                                        <a class="learn-more" href="#">learn more <span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box">
                                <div class="service-image">
                                    <img src="assets/images/service-img3.jpg" alt="Service" />
                                </div>
                                <div class="service-info">
                                    <div class="service-inner">
                                        <div class="service-icon comman-icon">
                                            <span class="icon-vaccines"></span>
                                        </div>
                                        <div class="service-title">Vaccinations & Immunizations</div>
                                        <a class="learn-more" href="#">learn more <span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box">
                                <div class="service-image">
                                    <img src="assets/images/service-img4.jpg" alt="Service" />
                                </div>
                                <div class="service-info">
                                    <div class="service-inner">
                                        <div class="service-icon comman-icon">
                                            <span class="icon-exotic-care"></span>
                                        </div>
                                        <div class="service-title">Exotic Pet Care</div>
                                        <a class="learn-more" href="#">learn more <span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Home Services End -->

<!-- Home Team Start -->
<div class="home-team">
    <div class="team-banner">
        <div class="banner-image">
            <img src="<?= get_theme_mod('webfx_test_our_team_background')?>" alt="Team" />
        </div>
    </div>
    <div class="team-content">
        <div class="container">
            <div class="team-wrap">
                <h4 class="optinal-h4"><?= get_theme_mod('webfx_test_our_team_subhead')?></h4>
                <h1><?= get_theme_mod('webfx_test_our_team_head')?></h1>
                <div class="row">
                    <?php
                    $args = array(
                        'post_type'   => array('home_team'),
                        'post_status' => 'publish',
                    );
                    query_posts( $args );
                    if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', get_post_type() );

                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="meet-button">
                    <a href="#" class="btn btn-secondary">Meet the Whole Team</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Home Team End -->

<!-- Exotic Care Start -->
<div class="exotic-care">
    <div class="container">
        <div class="exotic-wrap">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h4 class="optinal-h4"><?= get_theme_mod('webfx_test_services_section_2_subhead')?></h4>
                    <h1><?= get_theme_mod('webfx_test_services_section_2_heading')?></h1>
                    <p><?= get_theme_mod('webfx_test_services_section_2_description')?></p>
                    <a href="#" class="btn btn-primary">Learn More About Exotic Pet Care</a>
                </div>
                <div class="col-lg-5">
                    <div class="exotic-images">
                        <div class="exotic-image1 team-box">
                            <div class="team-image">
                                <img src="<?= get_theme_mod('webfx_test_services_section_2_image_1')?>" alt="Exotic" />
                            </div>
                            <div class="team-title"><?= get_theme_mod('webfx_test_services_section_2_image_1_name')?></div>
                        </div>
                        <div class="exotic-image2 team-box">
                            <div class="team-image">
                                <img src="<?= get_theme_mod('webfx_test_services_section_2_image_2')?>" alt="Exotic" />
                            </div>
                            <div class="team-title"><?= get_theme_mod('webfx_test_services_section_2_image_2_name')?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Exotic Care End -->

<!-- Fun Fact Start -->
<div class="fun-fact line-bg">
    <div class="container">
        <div class="fun-friday">
            FUN FACT
            <span class="friday-label">FRIDAY</span>
        </div>
        <div class="fun-fact-owl owl-carousel">
            <?php
            $args = array(
                'post_type'   => array('video'),
                'post_status' => 'publish',
            );
            query_posts( $args );
            if ( have_posts() ) :
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', get_post_type() );

                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<!-- Fun Fact End -->

<!-- Testi and Blog Start -->
<div class="testi-blog">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="testimonials">
                    <div class="comman-icon">
                        <span class="icon-quotes"></span>
                    </div>
                    <h1><?= get_theme_mod('webfx_test_testimonial_title') ?></h1>
                    <a class="btn btn-primary" href="javascript:void(0);">View All Testimonials</a>
                    <div class="testi-owl owl-carousel">
                        <?php
                        $args = array(
                            'post_type'   => array('testimonials'),
                            'post_status' => 'publish',
                        );
                        query_posts( $args );
                        if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();
                                get_template_part( 'template-parts/content', get_post_type() );

                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                $args = array(
                    'posts_per_page' => 1,
                    'offset' => 0,
                    'orderby' => 'ID',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                );
                query_posts( $args );
                if ( have_posts() ) :
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();

                        /*
                         * Include the Post-Type-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile;
                endif;
                ?>

            </div>
        </div>
    </div>
</div>
<!-- Testi and Blog End -->

<!-- Footer Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-logo">
                    <a href="#">
                        <?= the_custom_logo() ?>
                    </a>
                </div>
                <div class="footer-social">
                    <ul>
                        <li>
                            <a href="#" class="icon-facebook"></a>
                        </li>
                        <li>
                            <a href="#" class="icon-instagram"></a>
                        </li>
                        <li>
                            <a href="#" class="icon-youtube"></a>
                        </li>
                        <li>
                            <a href="#" class="icon-tiktoc"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h4>CONTACT INFORMATION</h4>
                    <p>
                        <?= get_theme_mod('webfx_test_company_address') ?> <br />
                        <a class="learn-more" href="#">Get Directions <span class="icon-arrow-right"></span></a>
                    </p>
                    <p>
                        Phone: <a class="color-body" href="tel:9413557707">941-355-7707</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h4>HOURS OF OPERATION</h4>
                    <p>
                        <?= get_theme_mod('webfx_test_hours_of_operation') ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h4>AWARDS & ASSOCIATIONS</h4>
                    <ul class="award-logos">
                        <li>
                            <img src="<?= get_theme_mod('webfx_test_company_award_1') ?>" alt="Award" />
                        </li>
                        <li>
                            <img src="<?= get_theme_mod('webfx_test_company_award_2') ?>" alt="Award" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-wrap">
                <div class="footer-left">
                    <ul class="footer-menu">
                        <li>
                            <a href="#">Site Credits</a>
                        </li>
                        <li>
                            <a href="#">Sitemap</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                    <div class="copyright">
                        Copyright © 2020. All Rights Reserved
                    </div>
                </div>
                <div class="back-top">
                    <a class="learn-more yellow-link" href="#">Back to Top <span class="icon-arrow-up"></span></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<?php
//get_sidebar();
//get_footer();
