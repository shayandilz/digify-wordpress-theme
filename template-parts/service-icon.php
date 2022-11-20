<section class="py-5 container">
    <div class="row g-3">
        <h3 class="text-dark pb-4 fs-2 fw-bolder lh-base wow animate__animated animate__fadeInLeft">
            <?php the_field( 'unique_service_title', 'option' ); ?>
        </h3>
        <?php if ( have_rows( 'unique_service', 'option' ) ): ?>
            <?php
            while ( have_rows( 'unique_service', 'option' ) ): the_row(); ?>
                <div class="col-lg col-6 d-flex justify-content-start flex-column pb-1 gap-4">
                    <a href="<?php the_sub_field('url'); ?>"
                       class="d-flex flex-column align-items-start gap-3 text-start menu-svg justify-content-between">
                        <div class="position-relative max-width-28 wow animate__animated animate__fadeInDown">
                            <?php the_sub_field('icon'); ?>
                        </div>
                        <span class="text-dark fw-bolder fs-5 wow animate__animated animate__fadeInDown animate__delay-1s">
                            <?php the_sub_field('title'); ?>
                        </span>
                    </a>
                    <div class="wow animate__animated animate__fadeInDown animate__delay-2s">
                        <?php the_sub_field('text'); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</section>
