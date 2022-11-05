<!--{{-- join us --}}-->
<section class="container py-5">
    <div class="row justify-content-lg-between justify-content-center align-items-center">
        <div class="col-lg-6 col-12 text-start text-dark pe-lg-0">
            <h5 class="lh-lg fw-bold fs-4 wow animate__animated animate__fadeInLeft">
                <?php the_field( 'join_title','option' ); ?>
            </h5>
        </div>
        <div class="col-lg-6 col-12 row justify-content-center align-items-start wow animate__animated animate__fadeIn icon-section">
            <?php
            $first_step = get_field( 'first_step','option'  );
            if ( $first_step ): ?>
                <div class="col-lg-3 col-4 d-flex flex-column align-items-center justify-content-center text-center position-relative">
                    <div class="d-flex align-items-center justify-content-center border rounded-circle line-dash "
                         style="width: 75px;height: 75px">
                        <div class="icon1">
                            <?= $first_step['svg'] ?>
                        </div>
                    </div>
                    <span class="small text-dark fw-light pt-2">
                        <?= $first_step['title'] ?>
                </span>
                </div>
            <?php
            endif; ?>
            <?php $second_step = get_field( '2nd_step','option'  );
            if ( $second_step ): ?>
                <div class="col-lg-3 col-4 d-flex flex-column align-items-center justify-content-center text-center position-relative">
                    <div class="d-flex align-items-center justify-content-center border rounded-circle line-dash"
                         style="width: 75px;height: 75px">
                        <div class="icon2">
                            <?= $second_step['svg'];  ?>
                        </div>
                    </div>
                    <span class="small text-dark fw-light pt-2">
                        <?= $second_step['title'] ?>
                    </span>
                </div>
            <?php
            endif; ?>
            <?php $third_step = get_field( '3rd_step','option'  );
            if ( $third_step ): ?>
                <div class="col-lg-3 col-4 d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="d-flex align-items-center justify-content-center border rounded-circle"
                         style="width: 75px;height: 75px">
                        <div class="icon3">
                            <?= $third_step['svg'] ?>
                        </div>
                    </div>
                    <span class="small text-dark fw-light pt-2">
                        <?= $third_step['title'] ?>
                    </span>
                </div>
            <?php
            endif; ?>
        </div>
        <?php
        $join_button = get_field( 'join_button','option'  );
        if ( $join_button ): ?>
            <a href="<?= esc_url( $join_button['url'] ); ?>"
               class="link-dark btn w-auto px-5 mt-3 mt-lg-0 d-flex align-items-center wow animate__animated animate__fadeInLeft animate__delay-1s">
                <?= $join_button['title'] ?>
            </a>
        <?php endif; ?>

    </div>
</section>
