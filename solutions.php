<?php
/* Template Name: Solutions */
get_header(); ?>


    <section class="py-5 d-flex align-items-center vh-100 position-relative">
        <div class="position-absolute top-0 end-0 mt-4">
            <?php get_template_part( 'template-parts/SVG/curve-line' ); ?>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <h1 class="text-dark fw-bold lh-base pb-3 wow animate__animated animate__fadeInUp">
                        <?php the_field('solution_title'); ?>
                    </h1>
                    <p class="mb-4 wow animate__animated animate__fadeInUp animate__delay-1s">
                        <?php the_field('solution_text'); ?>
                    </p>
                    <?php
                    $light_button = get_field('light_button');
                    $dark_button = get_field('dark_button');
                    ?>
                    <div class="d-flex gap-5">
                        <a href="<?= $dark_button['url'] ?>"
                           class="w-auto link-dark border rounded-1 btn fs-6 d-flex gap-2 align-items-center wow animate__animated animate__fadeInDown animate__delay-1s">
                            <?= $dark_button['title'] ?>
                        </a>
                        <a href="<?= $light_button['url'] ?>"
                           class="w-auto link-white border rounded-1 btn fs-6 d-flex gap-2 align-items-center wow animate__animated animate__fadeInDown animate__delay-2s">
                            <?= $light_button['title'] ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-5 mt-lg-0 px-4 wow animate__animated animate__fadeIn animate__delay-2s">
                    <?php
                    $solution_image = get_field('solutions_image');
                    ?>
                    <div class="card-shadow w-100 h-100 rounded-2 d-flex ratio-16x9 ratio">
                        <img src="<?= $solution_image['url'] ?>"
                             class="object-fit card-img-top border border-semi-light rounded-2"
                             alt="<?= $solution_image['alt'] ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_template_part( 'template-parts/box-purple' ); ?>
    <section class="container py-5 vh-65 d-flex justify-content-center align-items-center">
        <div class="row justify-content-center align-items-center wow animate__animated animate__fadeIn animate__delay-2s">
            <div class="col-10 ">
                <div class="position-relative d-flex">
                    <?php
                    $file = get_field('solution_video');
                    ?>
                    <video id="video" height="100%" width="100%" poster="<?php echo $file['image']['url'] ?>" muted>
                        <source src="<?php echo $file['video']['url'] ?>" type="video/mp4">
                    </video>
                    <div id="video_tr"
                         class="lazy position-absolute top-0 start-0 end-0 bottom-0 text-center d-flex flex-column justify-content-center align-items-center">
                        <button class="bg-transparent border-0" id="play_button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="#fff"
                                 class="bi bi-play-fill" viewBox="0 0 16 16">
                                <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                            </svg>
                        </button>
                        <span class="text-white fw-bold fs-5">
                            <?php the_field('video_text'); ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <div class="row justify-content-center align-items-center">
            <h3 class="text-center pb-5 text-dark fs-2 fw-bolder wow animate__animated animate__fadeIn">
                <?php the_field('solution_last_title');?>
            </h3>
            <div class="col-12 gap-6 d-flex flex-lg-row flex-column justify-content-center align-items-center wow animate__animated animate__fadeIn">
                <?php $solution_first_step = get_field('solution_first_step'); ?>
                <div class="d-flex flex-column justify-content-center align-items-center ">
                    <div class="bg-white rounded-1 w-100 position-relative">
                        <div class="position-absolute top-50 start-100 translate-middle-y d-none d-lg-block">
                            <?php get_template_part( 'template-parts/SVG/arrow-left' ); ?>
                        </div>
                        <div
                           class="m-5 d-flex flex-column align-items-center gap-4 col text-center menu-svg wow animate__animated animate__zoomIn animate__delay-1s">
                            <div class="position-relative max-width-28 py-2 z-top">
                                <?= $solution_first_step['icon'] ?>
                            </div>
                        </div>
                    </div>
                    <span class="fs-6 fw-lighter text-dark pt-4 wow animate__animated animate__zoomIn animate__delay-1s">
                        <?= $solution_first_step['title'] ?>
                    </span>
                </div>
            <?php $solution_second_step = get_field('solution_second_step'); ?>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="bg-white rounded-1 w-100 position-relative">
                        <div class="position-absolute top-50 start-100 translate-middle-y d-none d-lg-block">
                            <?php get_template_part( 'template-parts/SVG/arrow-left' ); ?>
                        </div>
                        <div
                           class="m-5 d-flex flex-column align-items-center gap-4 col text-center menu-svg wow animate__animated animate__zoomIn animate__delay-2s">
                            <div class="position-relative max-width-28 py-2 z-top">
                                <?= $solution_second_step['icon'] ?>
                            </div>
                        </div>
                    </div>
                    <span class="fs-6 fw-lighter text-dark pt-4 wow animate__animated animate__zoomIn animate__delay-2s">
                        <?= $solution_second_step['title'] ?>
                    </span>
                </div>
            <?php $solution_third_step = get_field('solution_third_step'); ?>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="bg-white rounded-1 w-100">
                        <div
                           class="m-5 d-flex flex-column align-items-center gap-4 col text-center menu-svg wow animate__animated animate__zoomIn animate__delay-3s">
                            <div class="position-relative max-width-28 py-2 z-top">
                                <?= $solution_third_step['icon'] ?>
                            </div>
                        </div>
                    </div>
                    <span class="fs-6 fw-lighter text-dark pt-4 wow animate__animated animate__zoomIn animate__delay-3s">
                        <?= $solution_third_step['title'] ?>
                    </span>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();