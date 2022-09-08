<section class="container py-5 wow animate__animated animate__fadeIn">
    <div class="bg-purple p-5 rounded-2 text-center">
        <div class="text-center lh-lg fs-3 text-white pb-5">
            <?php the_field( 'cta_title','option' ); ?>
        </div>
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
