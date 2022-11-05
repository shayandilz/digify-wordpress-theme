<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package baloochy
 */
get_header()
?>

<?php

$fixed_header = get_field('header_fixed_top', 'option');
while (have_posts()) :
    the_post();
    ?>
    <div class="position-fixed blog-progress w-100 z-top">
        <progress class="postProgressBar w-100" max="100" value="0"></progress>
    </div>
    <div class="container" >
        <div class="row align-items-center">
            <div class="col-12">

                <nav aria-label="breadcrumb">
                    <?php the_breadcrumb(); ?>
                </nav>
            </div>
        </div>
        <section class="row flex-column-reverse flex-lg-row py-0 py-lg-5 gap-lg-0 gap-5">
            <div class="col-lg-6 col-12">
                <h1 class="fs-3 fw-bold text-dark">
                    <?php the_title(); ?>
                </h1>
                <div class="d-inline-flex w-100 justify-content-between justify-content-lg-start">
                    <span class="text-semi-light small fw-lighter">
                        زمان خواندن: <?= do_shortcode('[rt_reading_time]') ?> دقیقه
                    </span>
                    <span class="text-semi-light ms-5 small fw-lighter">
                        تاریخ انتشار:
                     <?php echo get_the_date('d  F , Y'); ?>
                    </span>
                </div>
                <div class="list-unstyled mt-4">
                    <?php echo do_shortcode('[TOC]') ?>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <img src="<?php echo get_the_post_thumbnail_url() ?>"
                     class="img-fluid"
                     alt="<?php the_title(); ?>">
            </div>
        </section>
        <section class="row py-5">
            <article id="startProgressBar" class="col-lg-10 col-12 text-dark d-flex gap-3 flex-column blog-sticky">
                <?php the_content(); ?>
            </article>
            <?php
            $sticky_side_post = get_field('sticky_side_post','option');
            if ($sticky_side_post){?>
            <aside class="col-lg-2 col-12">
                <div class="bg-purple d-flex flex-column gap-4 px-3 py-5 text-center sticky-section">
                    <span class="text-white">
                        <?= $sticky_side_post['title'] ?>
                    </span>
                    <p class="text-white">
                        <?= $sticky_side_post['text'] ?>
                    </p>

                    <a href="<?= $sticky_side_post['button']['url'] ?>" class="btn link-dark d-flex align-items-center justify-content-center">
                        <?= $sticky_side_post['button']['title'] ?>
                    </a>
                </div>
            </aside>
            <?php } ?>
            <section class="text-start pt-5 col-lg-10">
                <h3>
                    دیدگاه خود را بنویسید:
                </h3>

                <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
            </section>
            <section class="col-lg-10 col-12 py-5">
                <h6 class="pb-3 text-start text-lg-center fs-3 fw-bold">جدیدترین پست‌های بلاگ دیجی‌فای</h6>
                <div class="row gap-5 gap-lg-0">
                    <div class="col-lg-6 col-12">
                        <?php get_template_part('template-parts/blog-post'); ?>
                    </div>
                    <div class="col-lg-6 col-12">
                        <?php get_template_part('template-parts/blog-post'); ?>
                    </div>
                </div>
            </section>
        </section>

    </div>


<?php
endwhile;
get_footer() ?>
