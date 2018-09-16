<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>



<div class="wrapper" id="wrapper-footer" style="background-color: #000; color: #fff;">

    <div class="<?php echo esc_attr( $container ); ?>">

        <div class="row">

            <div class="col-md-12">

                <footer class="site-footer" id="colophon">

                    <h5>
                        &copy; <?php echo date("Y"); ?> Taxexempt Consultants
                    </h5>
                    <h6>
                        website & logo by <a href="http://influentagency.com" target="_blank">INFLUENT</a>
                    </h6>





                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

        </div><!--col end -->

    </div><!-- row end -->

</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</body>

</html>

