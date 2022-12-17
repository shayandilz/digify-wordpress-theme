<?php /* Template Name: Home */
get_header(); ?>


<?php if (have_posts()) {
    the_post(); ?>

    <!-- hero -->
    <section class="flex-column d-flex justify-content-center align-items-center vh-65 overflow-hidden position-relative video-section">
        <video playsinline autoplay muted loop class="position-absolute w-100 top-0">
            <?php if (get_field('banner_video')): ?>
                <source src="<?php the_field('banner_video'); ?>" type="video/mp4">
            <?php endif; ?>
            <?php if (get_field('banner_video_web')): ?>
                <source src="<?php the_field('banner_video_web'); ?>" type="video/webm">
            <?php endif; ?>
        </video>
        <div class="container text-center text-white ">
            <h1 class="pb-0 pb-lg-5 fw-bolder lh-lg fs-1 animate__animated animate__fadeIn">
                <?= get_field('banner_title') ?>
            </h1>
            <?php
            $banner_button = get_field('banner_button');
            if ($banner_button): ?>
                <a href="<?= esc_url($banner_button['url']); ?>"
                   class="btn link-dark d-inline-flex align-items-center w-auto justify-content-center animate__animated animate__fadeInUp animate__delay-1s">
                    <?= $banner_button['title'] ?>
                </a>
            <?php endif; ?>
        </div>
    </section>
    <!-- services -->
    <section class="container py-5">
        <div class="row justify-content-center align-items-center text-center">
            <h3 class="text-dark fw-bolder animate__animated animate__fadeIn animate__delay-1s">
                <?php the_field('service_title'); ?>
            </h3>
            <p class="py-4 text-dark fw-lighter animate__animated animate__fadeIn animate__delay-2s">
                <?php the_field('service_text'); ?>
            </p>
        </div>
        <?php
        $services = get_field('services_list');
        if ($services): ?>
            <div class="row justify-content-center wow animate__animated animate__fadeIn">
                <?php foreach ($services as $post):
                    setup_postdata($post); ?>
                    <a href="<?php the_permalink(); ?>"
                       class="fadein d-flex flex-column align-items-center gap-5 col-lg col-6 border-start border-semi-light text-center no-border-first no-border-last ">
                        <div class="position-relative max-width-28 py-2 menu-svg">
                            <div class="position-relative justify-content-center align-items-center"
                                 style="width: 30px;height: 30px">
                                <div class="position-absolute z-top start-0 end-0 top-0 bottom-0">
                                    <?php the_field('service_icons'); ?>
                                </div>
                            </div>
                        </div>
                        <h6 class="fs-6 fw-light text-dark pb-2"><?php the_title(); ?></h6>
                    </a>
                <?php endforeach; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </section>
    <!-- about -->
    <section class="container p-lg-5 px-4">
        <div class="row ">
            <div class="col-12 col-lg-6 text-dark p-lg-5 mb-5 mb-lg-0">
                <h3 class="pb-lg-4 pb-2 lh-base fw-bolder wow animate__animated animate__fadeInLeft">
                    <?php the_field('start_title') ?>
                </h3>
                <div class="wow animate__animated animate__fadeInLeft">
                    <?php the_field('start_text') ?>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-lg-5 mb-3 mb-lg-0 section-1">
                <div class="card border-0 bg-transparent box1 shadow_box animate__animated animate__zoomIn">
                    <?php $first_box = get_field('first_box');
                    if ($first_box):
                        $image = $first_box['photo'];
                        ?>
                        <div class="ratio ratio-1x1 rounded-2 d-flex lazy-slow">
                            <img src="<?php echo esc_url($image['url']); ?>"
                                 class="object-fit border border-semi-light rounded-2"
                                 alt="<?php echo esc_attr($image['alt']); ?>">
                        </div>
                        <div class="card-body text-dark px-0">
                            <h5 class="card-title py-lg-3 pb-0 pt-2 fw-bold">
                                <?= $first_box['title'] ?>
                            </h5>
                            <p class="card-text">
                                <?= $first_box['text'] ?>
                            </p>
                        </div>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 no-translate translate-middle-y p-lg-5 mb-3 mb-lg-0 section-2">
                <div class="card border-0 bg-transparent box2 shadow_box animate__animated animate__zoomIn">
                    <?php $second_box = get_field('second_box');
                    if ($second_box):
                        $image = $second_box['photo'];
                        ?>
                        <div class="ratio ratio-1x1 rounded-2 d-flex lazy-slow">
                            <img src="<?php echo esc_url($image['url']); ?>"
                                 class="object-fit border border-semi-light rounded-2"
                                 alt="<?php echo esc_attr($image['alt']); ?>">
                        </div>
                        <div class="card-body text-dark px-0">
                            <h5 class="card-title py-lg-3 pb-0 pt-2 fw-bold">
                                <?= $second_box['title'] ?>
                            </h5>
                            <p class="card-text">
                                <?= $second_box['text'] ?>
                            </p>
                        </div>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-lg-5 mb-3 mb-lg-0 section-3">
                <div class="card border-0 bg-transparent box3 shadow_box animate__animated animate__zoomIn">
                    <?php $third_box = get_field('third_box');
                    if ($third_box):
                        $image = $third_box['photo'];
                        ?>
                        <div class="ratio ratio-1x1 rounded-2 d-flex lazy-slow">
                            <img src="<?php echo esc_url($image['url']); ?>"
                                 class="object-fit border border-semi-light rounded-2"
                                 alt="<?php echo esc_attr($image['alt']); ?>">
                        </div>
                        <div class="card-body text-dark px-0">
                            <h5 class="card-title py-lg-3 pb-0 pt-2 fw-bold">
                                <?= $third_box['title'] ?>
                            </h5>
                            <p class="card-text">
                                <?= $third_box['text'] ?>
                            </p>
                        </div>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
        <div class="svg-draw d-lg-block d-none">
            <?php get_template_part('template-parts/SVG/curve-right'); ?>
        </div>
    </section>
    <!-- join us -->
    <?php get_template_part('template-parts/joinus'); ?>
    <!-- partners -->
    <section class="container py-5 wow animate__animated animate__fadeIn">
        <h3 class="text-center fw-bolder text-dark">
            <?php the_field('partner_title'); ?>
        </h3>
        <div class="row pt-5 g-5 justify-content-center align-items-center">
            <?php
            if (have_rows('partner_list')):
                while (have_rows('partner_list')): the_row(); ?>
                    <div class="col-lg col-4 overflow-hidden py-lg-5 border-start border-semi-light text-center no-border-first no-border-last">
                        <div class="swiper swiper1">
                            <div class="swiper-wrapper">
                                <?php if (have_rows('partner')):
                                    while (have_rows('partner')): the_row();
                                        $image_brand = get_sub_field('partner_logo') ?>
                                        <img class="swiper-slide" src="<?= $image_brand['url']; ?>"
                                             alt="<?= $image_brand['alt']; ?>">
                                    <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                ?>
            <?php endif; ?>
        </div>
    </section>
    <!-- testimonial -->
    <section class="container py-5 wow animate__animated animate__fadeIn animate__delay-2s">
        <h3 class="text-center fw-bolder text-dark fs-3">
            <?php the_field('testi_title'); ?>
        </h3>
        <div class="row position-relative swiper-custom-navigation">
            <div class="swiper swiper2 px-3">
                <div class="swiper-wrapper">
                    <?php
                    if (have_rows('testimony_box')):
                        while (have_rows('testimony_box')): the_row();
                            $image_testi = get_sub_field('photo')
                            ?>
                            <div class="swiper-slide">
                                <div class="card card-shadow rounded-2 text-center overflow-visible">
                                    <div class="position-relative" style="top: -80px">
                                        <img src="<?= $image_testi['url'] ?>"
                                             width="160px"
                                             class=" rounded-circle mx-auto d-block"
                                             alt="<?= $image_testi['alt'] ?>">

                                    </div>
                                    <div class="card-body neg-margin-top">
                                        <h5 class="card-title"><?php the_sub_field('title'); ?></h5>
                                        <a rel='nofollow' href="<?php the_sub_field('url'); ?>" class="card-link text-card"><?php the_sub_field('url'); ?></a>
                                        <p class="card-text pt-2">
                                            <?php the_sub_field('text'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        ?>
                    <?php endif; ?>
                </div>
                <!-- If we need navigation buttons -->

                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev-unique position-absolute top-50 d-flex justify-content-center align-items-center">
                <i class="bi bi-chevron-left"></i>
            </div>
            <div class="swiper-button-next-unique position-absolute top-50 d-flex justify-content-center align-items-center">
                <i class="bi bi-chevron-right"></i>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/action-banner'); ?>
<?php }
get_footer();
