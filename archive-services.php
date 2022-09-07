<?php
/* Template Name: Services */
get_header(); ?>


<?php get_template_part( 'template-parts/banner-top' ); ?>
    <div id="scroll-to" class="opacity-0 pt-5"></div>
<?php get_template_part( 'template-parts/box-purple' ); ?>
    <section class="container">
        <div class="row py-5">
            <div class="col-lg-6 col-12 wow animate__animated animate__fadeIn d-flex justify-content-center">
                <?php
                $contact_image = get_field('image_gform');
                ?>
                <div class="card-shadow w-75 rounded-2 d-flex" style="height: 600px">
                    <img src="<?= $contact_image['url'] ?>" class="w-100 border border-semi-light rounded-2 object-fit"
                         alt="<?= $contact_image['alt'] ?>">
                </div>
            </div>
            <div class="col-lg-6 col-12 wow animate__animated animate__fadeIn d-flex justify-content-between flex-column align-items-start">
                <span class="text-start py-2 text-violet fw-light">
                    <?php the_field('small_gform'); ?>
                </span>
                <h5 class="py-2">
                    <?php the_field('title_gform'); ?>
                </h5>
                <div class="py-2">
                    <?php the_field('text_gform'); ?>
                </div>
                <div class="w-100 pt-5">
                    <?php
                    $gravity = get_field('gravity_choices');
                    echo do_shortcode('[gravityform id="'.$gravity.'" title="false" description="false" ajax="true"]') ?>
                </div>
            </div>
        </div>
    </section>
<?php get_template_part( 'template-parts/action-banner' ); ?>

<?php
get_footer();