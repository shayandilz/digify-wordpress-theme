<?php
$box_purple_choice = get_field( 'box_purple_choice' );
if ( $box_purple_choice == 'two' ) { ?>
    <section class="py-5 container">
        <div class="row justify-content-center align-items-center g-3">
            <h3 class="text-center pb-1 text-dark fs-2 fw-bolder wow animate__animated animate__fadeIn">
                <?php the_field( 'box_purple_title' ); ?>
            </h3>
            <p class="pb-5 text-center">
                <?php the_field( 'box_purple_text' ); ?>
            </p>

            <?php
            if ( have_rows( 'box_purple' ) ):
                while ( have_rows( 'box_purple' ) ): the_row(); ?>
                    <div class="col-lg-4 col-6">
                        <div class="bg-purple-tr rounded-1 d-flex flex-column justify-content-center align-items-start text-start px-2 py-0 p-lg-4 wow animate__animated animate__zoomIn">
                            <h5 class="text-dark fs-5 pb-5 mb-0">
                                <?php the_sub_field( 'title' ); ?>
                            </h5>
                            <?php
                            if ( get_sub_field( 'text' ) ) { ?>
                                <p>
                                    <?php the_sub_field( 'text' ); ?>
                                </p>
                            <?php } ?>
                            <?php
                            $button_more = get_sub_field('link');
                            if ( $button_more ) { ?>
                                <a class="text-decoration-underline pt-2" href="<?= esc_url($button_more['url']) ?>">
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
        <div class="row justify-content-center align-items-center g-3">
            <h3 class="text-center pb-5 text-dark fs-2 fw-bolder wow animate__animated animate__fadeIn">
                <?php the_field( 'box_purple_title' ); ?>
            </h3>
            <?php
            if ( have_rows( 'box_purple' ) ):
                while ( have_rows( 'box_purple' ) ): the_row(); ?>
                    <div class="col-lg-4 col-6">
                        <div class="bg-purple-tr rounded-1 d-flex justify-content-center align-items-center text-center px-2 py-0 py-lg-5 wow animate__animated animate__zoomIn">
                            <p class="text-dark fs-5 py-5 mb-0">
                                <?php the_sub_field( 'title' ); ?>
                            </p>
                        </div>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
<?php } ?>

