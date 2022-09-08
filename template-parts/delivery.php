<section class="container py-5">
    <div class="row">
        <h3 class="text-center pb-5 text-dark fs-2 fw-bolder wow animate__animated animate__fadeIn">
            <?php the_field('white_boxes_title'); ?>
        </h3>
        <div class="col-12 gap-6 d-flex flex-lg-row flex-column justify-content-center align-items-center wow animate__animated animate__fadeIn">
            <?php
            if ( have_rows( 'white_box_info' ) ):
                while ( have_rows( 'white_box_info' ) ): the_row(); ?>
                    <div class="d-flex flex-column justify-content-center align-items-center ">
                        <div class="bg-white rounded-1 position-relative d-flex justify-content-center align-items-center" style="width: 150px;height: 150px">
                            <?php the_sub_field('icon') ?>
                        </div>
                        <span class="fs-6 fw-lighter text-dark pt-4 wow animate__animated animate__zoomIn animate__delay-1s">
                        <?php the_sub_field('title') ?>
                    </span>
                    </div>
                <?php endwhile;
                ?>
            <?php endif; ?>
        </div>
    </div>
</section>
