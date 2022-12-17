<section class="container py-lg-5 py-3 wow animate__animated animate__fadeIn">
    <div class="py-5 px-2 p-lg-2 rounded-2 text-center row align-items-center justify-content-center" style="background: radial-gradient(59.58% 59.58% at 76.26% 37.53%, #7160AA 0%, #705FA9 0.01%, #4B2588 100%);">
        <div class="col-lg-6 col-12">
            <div class="d-none d-lg-block">
                <?php get_template_part('template-parts/SVG/action-banner-svg'); ?>
            </div>
            <div class="d-lg-none d-block">
                <?php get_template_part('template-parts/SVG/action-banner-svg-mobile'); ?>
            </div>
        </div>
        <div class="col-lg-5 col-12 text-lg-start text-center lh-lg text-white">
            <h2 class="pb-2">
                <?php the_field( 'cta_title','option' ); ?>
            </h2>
            <p class="fs-4">
                <?php the_field( 'cta_text','option' ); ?>
            </p>
            <?php
            $cta_button = get_field( 'cta_button','option' );
            if ( $cta_button ): ?>
                <a href="<?= esc_url( $cta_button['url'] ); ?>"
                   class="btn link-dark d-inline-flex w-auto justify-content-center align-items-center">
                    <?= $cta_button['title'] ?>
                </a>
            <?php endif; ?>
        </div>

    </div>
</section>
