<?php
/* Template Name: Services Page */
get_header(); ?>


    <section class="py-5 d-flex align-items-center bg-white vh-65">
        <div class="container mb-lg-5">
            <div class="row align-items-center justify-content-center g-5 g-lg-4">
                <div class="col-lg-5 col-10">
                    <?php
                    $banner_image = get_field('banner_image');
                    ?>
                    <div class="card-shadow w-100 h-100 rounded-2 d-flex ratio-16x9 ratio">
                        <img src="<?= $banner_image['url'] ?>"
                             class="object-fit card-img-top border border-semi-light rounded-2"
                             alt="<?= $banner_image['alt'] ?>">
                    </div>
                </div>
                <div class="col-lg-6 col-12 mx-4">
                    <h1 class="text-dark fw-bold lh-base wow animate__animated animate__fadeInUp">
                        <?php the_field('banner_top_title'); ?>
                    </h1>
                    <p class="animate__animated animate__fadeInUp animate__delay-1s py-2">
                        <?php the_field('banner_top_text'); ?>
                    </p>
                    <div class="d-flex gap-3 py-2">
                        <?php
                        $dark_button = get_field( 'dark_button' );
                        if ( $dark_button ): ?>
                            <a href="<?= esc_url( $dark_button['url'] ); ?>"
                               class="w-auto link-dark border rounded-1 btn px-4 py-2 fs-6 d-flex gap-2 align-items-center animate__animated animate__fadeIn animate__delay-2s">
                                <?= $dark_button['title'] ?>
                            </a>
                        <?php endif; ?>
                        <?php
                        $light_button = get_field( 'light_button' );
                        if ( $light_button ): ?>
                            <a href="<?= esc_url( $light_button['url'] ); ?>"
                               class="w-auto link-white border rounded-1 btn px-4 py-2 fs-6 d-flex gap-2 align-items-center animate__animated animate__fadeIn animate__delay-3s">
                                <?= $light_button['title'] ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="scroll-to" class="opacity-0 pt-5"></div>
<?php get_template_part( 'template-parts/box-purple' ); ?>
    <section class="container">
        <div class="row py-5 g-5 g-lg-2">
            <div class="col-lg-6 col-12 wow animate__animated animate__fadeIn d-flex justify-content-center">
                <?php
                $contact_image = get_field('image_gform');
                ?>
                <div class="card-shadow w-75 rounded-2 d-flex">
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