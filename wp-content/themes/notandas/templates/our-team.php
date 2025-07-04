<?php

/**
 * Template Name: Our Team Page
 */
get_header();
?>







<!-- innerBanner -->
<section class="homeBanner">
    <div class="container-fluid p-0">
        <div class="innerSlide">

            <?php if (get_field('banner_image')):  ?>
                <img src="<?php echo the_field('banner_image') ?>" class="img-fluid w-100" />
            <?php endif; ?>

        </div>
    </div>
</section>


<!-- Anchorlink Section -->
<section class="linkSection d-none d-lg-block">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center links">
            <ul class="d-flex align-items-center mb-0 ps-0">
                <?php if (get_field('strip_text')):  ?>
                    <li><a href="#our-team"><?php echo the_field('strip_text') ?></a></li>
                <?php endif; ?>
            </ul>

            <a href="<?php echo site_url() ?>/contact-us" class="cta">Reach out</a>
        </div>
    </div>
</section>







<!-- Team Section -->
<section id="our-team" class="pt-5 overflow-hidden">
    <div class="container">
        <div class="row justify-content-between align-items-center pb-5">
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="500" data-aos-duration="2000">
                <div class="svgImage px-lg-5">
                    <?php if (get_field('sec_one_image')): ?>
                        <img src="<?php echo the_field('sec_one_image') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-left" data-aos-delay="500" data-aos-duration="2000">
                <div class="headText">

                    <?php if (get_field('sec_one_slug')): ?>
                        <h5><?php echo the_field('sec_one_slug') ?></h5>
                    <?php endif; ?>

                    <?php if (get_field('sec_one_title')): ?>
                        <h2><?php echo the_field('sec_one_title') ?></h2>
                    <?php endif; ?>

                    <?php if (get_field('sec_one_desc')): ?>
                        <p><?php echo the_field('sec_one_desc') ?></p>
                    <?php endif; ?>

                </div>
            </div>
        </div>


        <div class="row justify-content-between align-items-center">

            <div class="col-md-6 order-2 order-md-1" data-aos="fade-left" data-aos-delay="500" data-aos-duration="2000">
                <div class="headText">

                    <?php if (get_field('sec_two_title')): ?>
                        <h2><?php echo the_field('sec_two_title') ?></h2>
                    <?php endif; ?>

                    <?php if (get_field('sec_two_desc')): ?>
                        <p><?php echo the_field('sec_two_desc') ?></p>
                    <?php endif; ?>
                    
                </div>
            </div>

            <div class="col-md-6 order-1 order-md-2" data-aos="fade-right" data-aos-delay="500" data-aos-duration="2000">
                <div class="svgImage px-lg-5">
                    <?php if (get_field('sec_two_img')): ?>
                        <img src="<?php echo the_field('sec_two_img') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
        </div>


    </div>
</section>






<!-- Line -->
<section>
    <div class="container">
        <div class="line mt-0"></div>
    </div>
</section>














<?php
get_footer();
?>