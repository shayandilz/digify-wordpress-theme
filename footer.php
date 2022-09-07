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
