<?php
$sign_in = get_field('sign_in', 'option');
$sign_up = get_field('sign_up', 'option');
?>
<div class="position-fixed bottom-0 end-0 start-0 mb-3 mx-auto d-flex justify-content-center z-top ">
    <div class="d-flex d-xl-none align-items-center w-100 mx-2">
        <a href="<?= $sign_up ?>"
           class="bg-black text-white me-md-4 me-3 border btn fs-6 fw-normal d-flex gap-2 align-items-center w-75 text-white justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                <path d="M6.99996 0C9.40331 0 11.3633 1.88271 11.3633 4.19137C11.3633 6.49998 9.40335 8.36032 6.99996 8.36032C4.59657 8.36032 2.6366 6.49998 2.6366 4.19137C2.6366 1.88275 4.59657 0 6.99996 0ZM6.99996 7.6879C9.00664 7.6879 10.6634 6.11898 10.6634 4.16887C10.6634 2.21892 9.00664 0.672372 6.99996 0.672372C4.99328 0.672372 3.33652 2.24129 3.33652 4.19141C3.33652 6.14136 4.99328 7.6879 6.99996 7.6879ZM10.0801 7.73278C11.9933 8.78622 13.3 10.7585 13.3 13H14C14 10.5569 12.6467 8.4276 10.6167 7.23967C10.4533 7.41916 10.2666 7.59833 10.0801 7.73278ZM0 13H0.700046C0.700046 10.7363 2.00668 8.76381 3.92011 7.73278C3.73342 7.5758 3.57017 7.41899 3.40677 7.23967C1.35338 8.42776 0 10.557 0 13Z"
                      fill="#ffffff"/>
            </svg>
            ثبت‌نام در دیجی‌فای
        </a>
        <a href="<?= $sign_in ?>" class="me-md-4 text-dark border fw-normal text-decoration-none fs-6 btn bg-white link-white w-25 text-center">
            ورود
        </a>

    </div>
</div>

</main>

<footer class="bg-white pt-5 bottom-0 end-0 start-0 w-100 z-below">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <a href="<?php echo esc_url( get_home_url() ) ?>">
                    <?php
                    $footer_logo = get_field( 'footer_logo', 'option' );
                    ?>
                    <img class="lazy" src="<?= $footer_logo ?>" alt="<?= get_bloginfo( 'name' ); ?>">
                </a>
                <div class="pt-5 text-justify small fw-lighter text-semi-light">
                    <?php the_field( 'footer_text', 'option' ); ?>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <h6 class="fw-bold pb-3 ">
                    اطلاعات تماس
                </h6>
                <ul class="list-unstyled pe-0 small fw-lighter d-flex flex-column gap-3">
                    <li>
                        <?php
                        $address = get_field( 'address', 'option' );
                        if ( $address ) { ?>
                            <a class="text-semi-light lazy text-decoration-none" href="<?= $address['url'] ?>">
                                <?= $address['text'] ?>
                            </a>
                        <?php } ?>

                    </li>
                    <li>
                        <?php
                        $phone = get_field( 'phone', 'option' );
                        if ( $phone ) { ?>
                            <a class="text-semi-light lazy text-decoration-none" href="tel:<?= $phone['url'] ?>">
                                <?= $phone['text'] ?>
                            </a>
                        <?php } ?>
                    </li>
                    <li>
                        <?php
                        $email = get_field( 'email', 'option' );
                        if ( $email ) { ?>
                            <a class="text-semi-light lazy text-decoration-none" href="mailto:<?= $email['url'] ?>">
                                <?= $email['text'] ?>
                            </a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
            <div class="col-lg col-6">
                <h6 class="fw-bold pb-3 ">
                    شبکه‌های اجتماعی
                </h6>
                <ul class="list-unstyled pe-0 small fw-lighter text-semi-light d-flex flex-column gap-3">
                    <?php
                    if ( have_rows( 'social_list','option' ) ):
                        while ( have_rows( 'social_list','option' ) ): the_row(); ?>
                            <li>
                                <a class="text-semi-light lazy text-decoration-none" href="<?php the_sub_field('link'); ?>">
                                    <?php the_sub_field('title'); ?>
                                </a>
                            </li>
                        <?php endwhile;
                        ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-lg col-6">
                <h6 class="fw-bold pb-3">
                    <?php
                    $locations = get_nav_menu_locations();
                    $menu      = wp_get_nav_menu_object( $locations['footerLocationOne'] );
                    echo $menu->name;
                    ?>
                </h6>
                <?php
                wp_nav_menu( array(
                        'theme_location' => 'footerLocationOne',
                        'menu_class'     => 'list-unstyled pe-0 small fw-lighter text-semi-light d-flex flex-column gap-3',
                        'container'      => false,
                        'menu_id'        => 'navbarTogglerMenu',
                        'item_class'     => 'nav-item',
                        'link_class'     => 'text-semi-light lazy text-decoration-none',
                        'depth'          => 1,
                ) );
                ?>

            </div>
            <div class="col-lg col-6">
                <h6 class="fw-bold pb-3">
                    <?php
                    $menu = wp_get_nav_menu_object( $locations['footerLocationTwo'] );
                    echo $menu->name;
                    ?>
                </h6>
                <?php
                wp_nav_menu( array(
                        'theme_location' => 'footerLocationTwo',
                        'menu_class'     => 'list-unstyled pe-0 small fw-lighter text-semi-light d-flex flex-column gap-3',
                        'container'      => false,
                        'menu_id'        => 'navbarTogglerMenu',
                        'item_class'     => 'nav-item',
                        'link_class'     => 'text-semi-light lazy text-decoration-none',
                        'depth'          => 1,
                ) );
                ?>
            </div>
        </div>
        <div class="row mb-5 justify-content-lg-end justify-content-center">
            <div class="col-3 d-inline-flex justify-content-lg-end justify-content-center gap-5 pe-lg-5">
                <?php
                $etemad_sign = get_field( 'etemad_sign', 'option' )
                ?>
                <?php if ( $etemad_sign['url1'] ) { ?>
                    <div class="border-semi-light border rounded-3 ">
                        <?= $etemad_sign['url1'] ?>
                    </div>
                <?php } ?>
                <?php if ( $etemad_sign['url2'] ) { ?>
                    <div class="border-semi-light border rounded-3 ">
                        <?= $etemad_sign['url2'] ?>
                    </div>
                <?php } ?>


            </div>
        </div>
        <div class="row justify-content-center pb-4">
            <div class="col-8 fw-lighter text-semi-light fs-6 text-center ">
                <?php the_field( 'copyright_text', 'option' ); ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
