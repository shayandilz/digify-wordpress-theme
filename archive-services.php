<?php
/* Template Name: Services */
get_header(); ?>


<?php get_template_part( 'template-parts/banner-top' ); ?>
    <div id="scroll-to" class="opacity-0 pt-5"></div>
<?php get_template_part( 'template-parts/box-purple' ); ?>
    <section class="container">
        <div class="row py-5">
            <div class="col-lg-6 col-12 wow animate__animated animate__fadeIn d-flex justify-content-center">
                <div class="card-shadow w-75 rounded-2 d-flex" style="height: 600px">
                    <img src="#" class="w-100 border border-semi-light rounded-2"
                         alt="...">
                </div>
            </div>
            <div class="col-lg-6 col-12 wow animate__animated animate__fadeIn d-flex justify-content-between flex-column align-items-start">
                <h6 class="text-start py-2 text-violet fw-light">
                    فکر همه‌جاش رو کردیم
                </h6>
                <h5 class="py-2">
                    به امکانات بیشتری نیاز دارید؟
                </h5>
                <p class="py-2">
                    اگر نیازمندید امکانات فعلی دیجی‌فای متناسب با کسب‌وکار شما شخصی‌سازی شود و ویژگی‌های خاصی داشته باشد، درخواست خود را ثبت کنید تاً آن‌ها را در سیستم پیاده کنیم.
                </p>
                <div class="w-100 pt-5">
                    <?php
                    $gravity = get_field('gravity_choices');
                    echo do_shortcode('[gravityform id="'.$gravity.'" title="false" description="false" ajax="true"]') ?>
                </div>
            </div>
        </div>
    </section>
<?php get_template_part( 'template-parts/action-banner' ); ?>

<?php
get_footer();