<section class="container py-5">
    <div class="row">
        <h3 class="text-center pb-5 text-dark fs-2 fw-bolder wow animate__animated animate__fadeIn">
            جدیدترین پست‌های بلاگ دیجی‌فای
        </h3>
        <?php
        $args = array(
                'post_type'           => 'post',
                'post_status'         => 'publish',
                'posts_per_page'      => '2',
                'ignore_sticky_posts' => true
        );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) : $i = 0;
            /* Start the Loop */
            while ( $loop->have_posts() ) :
                $loop->the_post(); ?>
                <div class="col-lg-6 col-12 mb-5 mb-lg-0 wow animate__animated animate__fadeIn">
                    <?php get_template_part( 'template-parts/blog-post' ); ?>
                </div>
            <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>
</section>
