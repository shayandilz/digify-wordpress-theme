<?php
/* Template Name: Shop Builder */
get_header(); ?>


<?php get_template_part( 'template-parts/banner-top' ); ?>
    <div id="scroll-to" class="opacity-0 pt-5"></div>
<?php get_template_part( 'template-parts/service-icon' ); ?>

    <section class="py-5 container px-4 px-lg-0">
        <div class="row position-relative tile-section">
            <div class="position-absolute end-0 w-auto translate-middle-y tiles">
                <?php get_template_part( 'template-parts/SVG/tiles' ); ?>
            </div>
            <h3 class="text-center pb-5 text-dark fs-2 fw-bolder lh-base wow animate__animated animate__fadeIn">
                <?php the_field( 'how_title' ); ?>
            </h3>
            <div class="col-lg-6 col-12 d-flex flex-column justify-content-evenly">
                <?php if ( have_rows( 'why_steps' ) ): ?>
                    <?php
                    while ( have_rows( 'why_steps' ) ): the_row(); ?>
                        <div class="pb-3">
                            <h5 class="text-dark fw-bolder fs-4 lh-base wow animate__animated animate__fadeInDown animate__delay-1s">
                                <?php the_sub_field('title'); ?>
                            </h5>
                            <p class="fs-5 wow animate__animated animate__fadeInDown animate__delay-2s">
                                <?php the_sub_field('text'); ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                <?php endif;
                wp_reset_postdata(); ?>
            </div>
            <?php
            $how_image = get_field( 'how_image' );
            ?>
            <div class="col-lg-6 col-12 wow animate__animated animate__fadeIn d-flex justify-content-center">
                <div class="card-shadow w-75 rounded-2 d-flex" style="height: 700px">
                    <img src="<?= $how_image['url'] ?>" class="w-100 border border-semi-light rounded-2"
                         alt="<?= $how_image['alt'] ?>">
                </div>
            </div>
            <div class="position-absolute start-0 w-auto" style="bottom: -140px">
                <?php get_template_part( 'template-parts/SVG/tiles' ); ?>
            </div>
        </div>
    </section>
<?php get_template_part( 'template-parts/box-purple' ); ?>
<?php get_template_part( 'template-parts/latest-post' ); ?>
<?php get_template_part( 'template-parts/action-banner' ); ?>


<?php
get_footer();