<?php
$box_purple_choice = get_field('box_purple_choice');
if ($box_purple_choice == 'two') { ?>
    <section class="py-5 container">
        <h3 class="text-center pb-1 text-dark fs-2 fw-bolder wow animate__animated animate__fadeIn">
            <?php the_field('box_purple_title'); ?>
        </h3>
        <div class="pb-5 text-center">
            <?php the_field('box_purple_text'); ?>
        </div>
        <div class="row justify-content-center align-items-center g-3 equal-box">
            <?php
            if (have_rows('box_purple')):
                while (have_rows('box_purple')): the_row(); ?>
                    <div class="col-lg-4 col-6">
                        <div class="h-100 bg-purple-tr rounded-1 d-flex flex-column justify-content-center align-items-start text-start py-3 px-2 p-lg-5 wow animate__animated animate__zoomIn">
                            <h5 class="text-dark fs-5 fw-bold pb-lg-5 pb-3 mb-0">
                                <?php the_sub_field('title'); ?>
                            </h5>
                            <?php
                            if (get_sub_field('text')) { ?>
                                <p>
                                    <?php the_sub_field('text'); ?>
                                </p>
                            <?php } ?>
                            <?php
                            $button_more = get_sub_field('link');
                            if ($button_more) { ?>
                                <a class="text-decoration-underline pt-2 fs-6 fw-lighter d-flex align-items-center gap-3"
                                   href="<?= esc_url($button_more['url']) ?>">
                                    <?= $button_more['text'] ?>
                                    <?php get_template_part('template-parts/SVG/arrow-icon') ?>
                                </a>
                            <?php } ?>
                        </div>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
<?php } else { ?>
    <section class="py-5 container">
        <h3 class="text-center pb-5 text-dark fs-2 fw-bolder wow animate__animated animate__fadeIn">
            <?php the_field('box_purple_title'); ?>
        </h3>
        <div class="row justify-content-center align-items-center g-3 equal-box">
            <?php
            if (have_rows('box_purple')):
                while (have_rows('box_purple')): the_row(); ?>
                    <div class="col-lg-4 col-6">
                        <div class="bg-purple-tr rounded-1 d-flex justify-content-center align-items-center text-center px-2 py-0 py-lg-5 wow animate__animated animate__zoomIn h-100">
                            <p class="text-dark fs-5 py-5 mb-0">
                                <?php the_sub_field('title'); ?>
                            </p>
                        </div>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
<?php } ?>

