<?php
/**
 * Template Name: HOME
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */



get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


<div id="section-1">
    <div class="container-fluid" id="content">


        <div id="indicators-slide-1" class="carousel slide" data-ride="carousel" data-interval="true">

            <ol class="carousel-indicators indicator-s1">
                <li data-target="indicators-slide-1" data-slide-to="0" class="active"></li>
                <li data-target="indicators-slide-1" data-slide-to="1"></li>
                <li data-target="indicators-slide-1" data-slide-to="2"></li>
            </ol>


            <div class="carousel-inner" role="listbox">

                <!-- Slide One-->
                <div class="carousel-item active slide-1-bg-img" style="background-image: url('<?php the_field('home_slide_1'); ?>')">



                    <h1>HELLO WORLD</h1>

                </div>
            </div>

            <!-- Slide Two-->
            <div class="carousel-item slide-2-bg-img" style="background-image: url('<?php the_field('home_slide_2'); ?>')">

                <div class="s1-slide-2">
                    <div class="font-box-s2 slide-2-box">
                        <h1 class="helv-ult">FLEXIBLE CAPITAL</h1>
                        <div class="font-box-2">
                            <h2 class="slide-2-text cochin">A Customized Investment Approach For Every Deal</h2>
                        </div>
                    </div>
                </div>


                <!-- Slide Three-->
                <div class="carousel-item" style="background-image: url('<?php the_field('home_slide_3'); ?>')">
                    <div class="s1-slide-1 s1-slide-3"> <!--s1-slide-3 -->

                        <div class="font-box font-box-3">
                            <h1 class="helv-ult">TRANSFORMATIONAL APPROACH</h1>
                            <h2 class="cochin s1s3">An Operational Focus to Drive Shareholder Value</h2>
                        </div>  
                    </div>
                </div>
            </div>



            <a class="carousel-control-prev" href="#indicators-slide-1" role="button" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#indicators-slide-1" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span> 
            </a>
        </div>
    </div>
</div>



<!-- END SECTION 1 -->

<section id="section-2">

    <div class="container">    
        <div class="col-md-6">

            <h5>YADDA YADDA</h5>
            <p>OBBo obba</p>

        </div>

        <div class="col-md-6">
            <h5>YADDA YADDA</h5>
            <p>OBBo obba</p>
        </div>

    </div>

</section>

<div class="wrapper" id="full-width-page-wrapper">

</div><!-- Wrapper end -->

<?php get_footer(); ?>
