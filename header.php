<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebFX_Test_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'webfx-test-theme' ); ?></a>
    <div class="covid-message">
        <div class="container">
            <div class="covid-text"><?= get_theme_mod('webfx_test_top_banner_text')?></div>
            <div class="covid-link">
                <a class="learn-more" href="#">learn more <span class="icon-arrow-right"></span></a>
            </div>
            <a href="javascript:void(0);" class="icon-close removeit"></a>
        </div>
    </div>
    <header class="header">
        <div class="container">
            <div class="header-wrap">
                <div class="header-logo">
                    <?php
                    the_custom_logo();
                    if ( is_front_page() && is_home() ) :
                    else :
                        ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php
                    endif;
                    $webfx_test_theme_description = get_bloginfo( 'description', 'display' );
                    if ( $webfx_test_theme_description || is_customize_preview() ) :
                        ?>
                        <p class="site-description"><?php echo $webfx_test_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                    <?php endif; ?>
                </div>
                <div class="header-right">
                    <div class="header-content">
                        <div class="call-us">
                            <span><?= get_theme_mod('webfx_test_header_contact_label')?></span>
                            <a href="tel:<?= get_theme_mod('webfx_test_header_contact_number')?>">
                                <?= get_theme_mod('webfx_test_header_contact_number')?>
                            </a>
                        </div>
                        <div class="online-request">
                            <a href="<?= get_theme_mod('webfx_test_header_btn_1_link')?>" class="btn btn-secondary"><?= get_theme_mod('webfx_test_header_btn_1_label')?></a>
                            <a href="<?= get_theme_mod('webfx_test_header_btn_2_link')?>" class="btn btn-primary"><?= get_theme_mod('webfx_test_header_btn_2_label')?></a>
                        </div>
                    </div>
                    <div class="header-bottom">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon">
									<span></span>
									<span></span>
									<span></span>
								</span>
                                <span class="menu-text">Menu</span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'menu' => 'primary',
                                        'theme_location' => 'primary',
                                        'menu_class'     => 'navbar-nav',
                                        'container' => 'ul',
                                        'walker' => new WebFxTestWalkerNavMenu(),
                                        'depth'                => 3,
                                    )
                                );
                                ?>
                                <!---
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                           data-toggle="dropdown">Services</a>
                                        <ul class="submenu dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="#">Telemedicine/Virtual
                                                    Veterinary Services</a>
                                                <ul class="submenu dropdown-menu">
                                                    <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#"> Dropdown item
                                                            2</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#"> Dropdown item
                                                            3</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="#">Wellness Plans</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Vaccinations</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Exotic Pet Care</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Laser Therapy</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Dental Cleaning</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Elderly Pet Care
                                                    Services</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Pet Microchipping</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Dog Grooming Services</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="#">How to Treat
                                                    Heartworms</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Flea & Tick Prevention</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="#">Surgery and Specialty
                                                    Services for Pets</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Treating Itchy Skin & Pet
                                                    Allergies</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                           data-toggle="dropdown">Types of
                                            Animals</a>
                                        <ul class="submenu dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1 </a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 2</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 3</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 4</a>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                           data-toggle="dropdown">Resources</a>
                                        <ul class="submenu dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1 </a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 2</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 3</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 4</a>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Testimonials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                           data-toggle="dropdown">Service
                                            Area</a>
                                        <ul class="submenu dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1 </a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 2</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 3</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 4</a>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                           data-toggle="dropdown">About Us</a>
                                        <ul class="submenu dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 1 </a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 2</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 3</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"> Dropdown item 4</a>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact Us</a>
                                    </li>
                                </ul>

                                --->
                            </div>
                        </nav>
                        <div class="header-search">
                            <a href="javascript:void(0);" class="icon-search"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="searchbar">
            <div class="container">
                <div class="searchbar-inner">
                    <input type="text" class="form-control" placeholder="Search here..." />
                    <button type="submit" class="btn search-btn icon-search"></button>
                </div>
            </div>
        </div>

        <div class="mobile-bottom-header">
            <div class="call-us">
                <span>call us </span>
                <a href="tel:<?= get_theme_mod('webfx_test_header_contact_number')?>"><?= get_theme_mod('webfx_test_header_contact_number')?></a>
            </div>
        </div>
    </header>
<!--</div>-->
