<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<main class="site-main" id="main" role="main">
    <section id="section-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col" id="test">
                    <div class="carousel slide" data-ride="false">

                        <ol class="carousel-indicators">
                            <li data-target=".slide" data-slide-to="0" class="active"></li>
                            <li data-target=".slide" data-slide-to="1"></li>
                            <li data-target=".slide" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active" style="background-image: url('<?php the_field('home_slide_1'); ?>')">
                            </div>

                            <div class="carousel-item" style="background-image: url('<?php the_field('home_slide_2'); ?>')">
                            </div>

                            <div class="carousel-item" style="background-image: url('<?php the_field('home_slide_3'); ?>')">
                            </div>

                            <div class="content_overlay">
                                <div class="the_content">
                                    <?php the_field('header_text'); ?>
                                    <br/><br/>
                                    <a href="#section-2"><button type="button" class="btn btn btn-success">LEARN MORE</button></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-2">
        <div class="container-fluid trick-out">  
            <div class="space_2em"></div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Who We Are</h1>
                </div>
            </div>
            <div class="row card_center">
                <div class="col-xs-12 col-lg-4 card_bounce">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php the_field('card_img_1'); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php the_field('headline_left'); ?>
                            </h4>
                            <p class="card-text"><?php the_field('paragraph_left'); ?> </p>
                        </div>
                    </div>
                    <br/>
                </div>
                <div class="space_btwn_1em"></div>
                <div class="col-xs-12 col-lg-4 card_bounce">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php the_field('card_img_2'); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><?php the_field('headline_right'); ?></h4>
                            <p class="card-text">
                                <?php the_field('paragraph_right'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space_2em"></div>
        </div>
    </section>
    <section id="section-3">
        <div class="space_2em"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 rk_contact_section">
                    <h1>Contact Us:</h1>
                    <?php the_field('contact_info'); ?>
                </div>

                <div class="col-lg-6 rk_contact_form">
                    <?php echo do_shortcode( '[contact-form-7 id="34" title="Contact form 1"]' ); ?>
                </div>
            </div>
        </div>
        <div class="space_2em"></div>
    </section>
</main><!-- #main -->
<?php get_footer(); ?>
