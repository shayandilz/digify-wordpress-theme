<section class="container py-lg-5 py-3 wow animate__animated animate__fadeIn">
    <div class="bg-purple py-5 px-2 p-lg-5 rounded-2 text-center">
        <h2 class="text-center lh-lg text-white pb-5">
            <?php the_field( 'cta_title','option' ); ?>
        </h2>
        <?php
        $cta_button = get_field( 'cta_button','option' );
        if ( $cta_button ): ?>
            <a href="<?= esc_url( $cta_button['url'] ); ?>"
               class="btn link-dark d-inline-flex w-auto justify-content-center align-items-center">
                <?= $cta_button['title'] ?>
            </a>
        <?php endif; ?>

    </div>
</section>
