<?php
/* Template Name: Pricing */
get_header(); ?>

    <div class="container">
        <section class="row py-5 text-center justify-content-center gap-4  wow animate__animated animate__fadeIn">
            <div class="col-lg-10 col-12">
                <h1 class="text-dark pb-4">
                    <?php the_field('pricing_title'); ?>
                </h1>
                <p class="text-dark mb-5 mb-lg-1">
                    <?php the_field('pricing_text'); ?>
                </p>
                <div class="py-5 swiper swiper4 swiper-custom overflow-visible px-4">
                    <div class="swiper-pagination w-auto gap-2 d-inline-flex position-relative float-end"
                         style="padding: 8px 4px;">
                        <span class="marker"></span>
                    </div>
                    <ul class="swiper-wrapper m-0 p-0 list-unstyled">
                        <?php if (have_rows('pricing_table')): ?>
                            <?php
                            while (have_rows('pricing_table')): the_row(); ?>
                                <li class="swiper-slide position-relative bg-white rounded-1"
                                    data-name="<?php the_sub_field('time'); ?>">
                                    <div
                                            class="w-auto bg-white rounded-1 border position-absolute top-0 ms-lg-5 ms-3 translate-middle-y">
                                        <div class="d-flex p-2 align-items-center">
                                            <?php the_sub_field('icon'); ?>
                                            <div class="d-flex flex-column">
                                                <span class="fw-bold fs-5 pb-2"><?php the_sub_field('title'); ?></span>
                                                <span class="small fw-lighter text-semi-light text-start">
                                                <?php the_sub_field('sub_title'); ?>
                                            </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="overflow-hidden px-lg-5 px-2">
                                        <div class="pt-5 text-center row flex-column-reverse flex-lg-row align-items-center position-relative">
                                            <div class="col-lg-8 col-12 pt-2 pb-4 px-lg-0">
                                                <?php
                                                if (have_rows('list')): ?>
                                                    <ul class="text-start px-4">
                                                        <?php
                                                        while (have_rows('list')): the_row(); ?>
                                                            <li>
                                                                <?php the_sub_field('title'); ?>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-lg-4 col-12 pt-2 px-3 pb-4 d-flex flex-column">
                                                <h4 class="fs-1 fw-bold text-lg-end text-center">
                                                    <?php the_sub_field('price'); ?>
                                                </h4>
                                                <span class="text-semi-light text-lg-end text-center pb-4">
                                            تومان
                                        </span>
                                                <?php
                                                $price_button = get_sub_field('button');
                                                if ($price_button): ?>
                                                    <a href="<?= $price_button['url'] ?>"
                                                       class="btn fw-light link-dark d-flex align-items-center justify-content-center">
                                                        <?= $price_button['title'] ?>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endif;
                        wp_reset_postdata(); ?>
                    </ul>

                </div>
                <div class="d-inline-flex justify-content-start w-100 gap-5">
                    <?php
                    $under_price = get_field('under_price')
                    ?>
                    <span class="small text-dark fw-light">
                            <?= $under_price['right'] ?>
                    </span>
                    <a href=" <?= $under_price['url'] ?>"
                       class="small text-dark text-decoration-underline fw-light d-flex align-items-center justify-content-center gap-2">
                        <?= $under_price['left'] ?>
                        <?php get_template_part('template-parts/SVG/arrow-icon'); ?>
                    </a>
                </div>
            </div>
        </section>
        <section class="row py-5">
            <h3 class="text-start fw-bold pb-4">
                <?php the_field('why_title'); ?>
            </h3>
            <?php if (have_rows('section_why')): ?>
                <?php
                while (have_rows('section_why')): the_row(); ?>
                    <div class="col-lg-3 col-6">
                        <div class="menu-svg flex-column gap-3 d-flex justify-content-start">
                            <div class="position-relative">
                                <?php the_sub_field('icon'); ?>
                            </div>
                            <h6 class="text-decoration-underline py-2 fw-bold">
                                <?php the_sub_field('title'); ?>
                            </h6>
                            <div class="fw-light small">
                                <?php the_sub_field('text'); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>
        </section>

    </div>
<?php get_template_part('template-parts/action-banner'); ?>

    <section class="py-5 bg-purple-tr">
        <div class="container">
            <h2 class="text-dark fs-2 fw-bold text-center pb-4">
                <?php the_field('freq_title'); ?>
            </h2>
            <div class="row">
                <?php
                if (have_rows('box_freq')):
                    $i = 0;
                    while (have_rows('box_freq')): the_row(); $i++ ?>
                        <div class="col-lg-6 col-12">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item bg-transparent border-0">
                                    <h2 class="accordion-header" id="panelsStayOpen-heading<?php echo $i;?>">
                                        <button class="accordion-button bg-transparent border-0 shadow-none text-dark fs-5 fw-bold"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapse<?php echo $i;?>" aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapse<?php echo $i;?>">
                                            &#8226; <?php the_sub_field('title') ?>
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse<?php echo $i;?>" class="accordion-collapse collapse show"
                                         aria-labelledby="panelsStayOpen-heading<?php echo $i;?>">
                                        <p class="accordion-body">
                                            <?php the_sub_field('text') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php
get_footer();