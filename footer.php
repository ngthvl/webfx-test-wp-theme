<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebFX_Test_Theme
 */

?>

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
                        Phone: <a class="color-body" href="tel:<?= get_theme_mod('webfx_test_header_contact_number')?>"><?= get_theme_mod('webfx_test_header_contact_number')?></a>
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

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
