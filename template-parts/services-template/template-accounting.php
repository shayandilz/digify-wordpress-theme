<div class="py-5 container">
	<section class="row align-items-center min-vh-100">
		<div class="col-12 col-lg-6">
			<img src="<?php echo get_the_post_thumbnail_url() ?>"
			     class="img-fluid border rounded-1"
			     alt="<?php the_title(); ?>">
		</div>
		<div class="col-12 col-lg-6">
                <span class="fs-6 text-violet">
                    <?php the_field('service_top_title'); ?>
                </span>
			<h1 class="fw-bold py-3">
				<?php the_title(); ?>
			</h1>
			<div class="text-dark pb-2">
				<?php the_content(); ?>

			</div>
			<?php
			$service_button = get_field('service_button');
			?>
			<a href="<?= $service_button['url'] ?>" class="btn link-dark d-inline-flex align-items-center justify-content-center">
				<?= $service_button['title'] ?>
			</a>
		</div>
		<div class="col-12">
			<a href="#more" class="text-center fs-6 py-2 d-flex flex-column justify-content-center align-items-center" href="#">
				<?php get_template_part('template-parts/SVG/arrow-down'); ?>
				بیش‌تر بخوانید
			</a>
            <div id="more"></div>
			<p class="py-2 fw-normal text-center">
				<?php the_field('service_text'); ?>
			</p>
		</div>
	</section>
	<section class="row py-5 g-5 g-lg-0">
		<?php
		$horizontal_service_col = get_field('horizontal_service_col');
		?>
		<div class="col-12 col-lg-6 px-4 d-flex flex-column gap-lg-4 gap-2 justify-content-center">
			<h4>
				<?= $horizontal_service_col['title'] ?>
			</h4>
            <?= $horizontal_service_col['text1'] ?>
		</div>
		<?php wp_reset_postdata(); ?>
		<div class="col-12 col-lg-6 px-4 d-flex flex-column-reverse flex-lg-column gap-lg-4 gap-2">
			<img src="<?= $horizontal_service_col['image1']['url'] ?>"
			     class="img-fluid border rounded-1"
			     alt="<?= $horizontal_service_col['image1']['alt'] ?>">

		</div>
	</section>
</div>
<?php get_template_part('template-parts/delivery'); ?>
<?php get_template_part('template-parts/latest-post'); ?>
<?php get_template_part('template-parts/joinus'); ?>