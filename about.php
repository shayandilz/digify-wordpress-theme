<?php
/* Template Name: About us */
get_header(); ?>

    <div class="py-5 container gap-6">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 col-12">
                <h1 class="pb-3">
                    <?php the_field('section1_title'); ?>
                </h1>
                <p>
                    <?php the_field('section1_text'); ?>
                </p>
            </div>
            <?php
            $image_section1 = get_field('section1_image');
            ?>
            <div class="col-lg-6 col-12 px-4 px-lg-2">
                <img src="<?= $image_section1['url'] ?>"
                     class="img-fluid card-shadow rounded-1"
                     alt="<?= $image_section1['alt'] ?>">
            </div>
        </div>
        <div class="row flex-row-reverse align-items-center py-5">
            <div class="col-lg-6 col-12">
                <h4 class="pb-3">
                    <?php the_field('section2_title'); ?>
                </h4>
                <p>
                    <?php the_field('section2_text'); ?>
                </p>
            </div>
            <?php
            $image_section2 = get_field('section2_image');
            ?>
            <div class="col-lg-6 col-12">
                <img src="<?= $image_section2['url'] ?>"
                     class="img-fluid rounded-1"
                     alt="<?= $image_section2['alt'] ?>">
            </div>
        </div>
        <div class="row align-items-center py-5 g-5">
            <div class="col-lg-6 col-12 d-flex flex-column gap-4">
                <h4 class="pb-3">
                    <?php the_field('section3_title'); ?>
                </h4>
                <p>
                    <?php the_field('section3_text'); ?>
                </p>
                <?php
                $image_section3 = get_field('section3_image');
                ?>
                <img src="<?= $image_section3['url'] ?>"
                     class="img-fluid rounded-1"
                     alt="<?= $image_section3['alt'] ?>">
            </div>
            <div class="col-lg-6 col-12 d-flex flex-column-reverse flex-lg-column gap-4">
                <?php
                $image_section4 = get_field('section4_image');
                ?>
                <img src="<?= $image_section4['url'] ?>"
                     class="img-fluid rounded-1"
                     alt="<?= $image_section4['alt'] ?>">
                <h4 class="pb-3 order-1 order-lg-2">
                    <?php the_field('section4_title'); ?>
                </h4>
                <p class="order-3 order-lg-3">
                    <?php the_field('section4_text'); ?>
                </p>
            </div>
        </div>
        <div class="row align-items-center py-5">
            <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                <h4 class="pb-3">
                    <?php the_field('section5_title'); ?>
                </h4>
                <p>
                    <?php the_field('section5_text'); ?>
                </p>
                <a class="btn link-dark d-inline-flex align-items-center justify-content-center">
                    شروع یک ماه استفاده رایگان!
                </a>
            </div>
            <?php
            $image_section5 = get_field('section5_image');
            ?>
            <div class="col-lg-6 col-12">
                <img src="<?= $image_section5['url'] ?>"
                     class="img-fluid rounded-1"
                     alt="<?= $image_section5['alt'] ?>">
            </div>
        </div>
        <div class="row align-items-center py-5 justify-content-center">
            <div class="col-lg-11 col-12 text-center row justify-content-center">
                <h4 class="pb-3 ">
                    <?php the_field('section_contact_title'); ?>
                </h4>
                <p>
                    <?php the_field('section_contact_text'); ?>
                </p>
                <div class="col-lg-10 col-12">
                    <?php
                    $gravity = get_field('gravity_choices');
                    echo do_shortcode('[gravityform id="'.$gravity.'" title="false" description="false" ajax="true"]') ?>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
