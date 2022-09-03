<?php global $post; ?>

<a href="<?php the_permalink(); ?>" class="card bg-transparent border-0 text-bg-dark">
    <div class="position-relative">
        <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img" alt="...">
        <div class="card-img-overlay p-4">
            <?php
            $category_detail = get_the_category($post->ID);//$post->ID
            foreach($category_detail as $category) { ?>
            <span class="py-2 px-3 fs-6 fw-lighter bg-purple-tr border text-purple border-purple rounded-pill">
                <?php echo $category->name?>
            </span>
            <?php } ?>
        </div>
        <div class="position-absolute bottom-0 start-0 p-2 fw-light">
            <span class="fs-6 text-dark fw-lighter">زمان خواندن: پنج دقیقه</span>
        </div>
    </div>
    <h6 class="card-title text-dark fw-bold pb-3 pt-4 mb-0">
        <?php the_title(); ?>
    </h6>
    <a class="small fw-lighter d-flex align-items-center gap-3" href="<?php the_permalink(); ?>">
        این مقاله را بخوانید
        <?php get_template_part('template-parts/SVG/arrow-icon'); ?>
    </a>
</a>
