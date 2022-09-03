<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Digify website">
    <meta name="description" content="">
    <meta name="author" content="EJ">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<header id="main-header" class="w-100 position-fixed lazy">
    <div class="flex-nowrap bg-white">
        <nav class="container navbar navbar-expand-xl rounded navbar-light px-2  lazy-slow justify-content-xl-between justify-content-xl-start animate__animated animate__fadeInDown animate__delay-1s">
            <button class="navbar-toggler border-0 px-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 4.5H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M11.5303 9.5H21.0003" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M3 14.5H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M11.5303 19.5H21.0003" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </button>
            <a class="navbar-brand me-0 me-lg-3" href="<?php echo esc_url(get_home_url()) ?>">
                <?php
                $logo = get_field('site_logo', 'option');
                ?>
                <img class="lazy" height="30" src="<?= $logo ?>" alt="<?= get_bloginfo('name'); ?>">
            </a>
            <div class="collapse navbar-collapse justify-content-start mt-4 mt-lg-0" id="navbarNav">
                <?php
                wp_nav_menu(array(
                        'theme_location' => 'headerMenuLocation',
                        'menu_class' => 'navbar-nav pe-0',
                        'container' => false,
                        'menu_id' => 'navbarTogglerMenu',
                        'item_class' => 'nav-item',
                        'link_class' => 'nav-link',
                        'depth' => 2,
                ));
                //                do_action('wpml_add_language_selector');
                $sign_in = get_field('sign_in', 'option');
                $sign_up = get_field('sign_up', 'option');
                ?>
                <div class="d-flex d-xl-none align-items-center">

                    <a href="<?= $sign_in ?>" class="me-md-4 me-3 text-dark fw-normal text-decoration-none fs-6">
                        ورود
                    </a>
                    <a href="<?= $sign_up ?>"
                       class="link-white me-md-4 me-3 border rounded-1 btn fs-6 fw-normal d-flex gap-2 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                            <path d="M6.99996 0C9.40331 0 11.3633 1.88271 11.3633 4.19137C11.3633 6.49998 9.40335 8.36032 6.99996 8.36032C4.59657 8.36032 2.6366 6.49998 2.6366 4.19137C2.6366 1.88275 4.59657 0 6.99996 0ZM6.99996 7.6879C9.00664 7.6879 10.6634 6.11898 10.6634 4.16887C10.6634 2.21892 9.00664 0.672372 6.99996 0.672372C4.99328 0.672372 3.33652 2.24129 3.33652 4.19141C3.33652 6.14136 4.99328 7.6879 6.99996 7.6879ZM10.0801 7.73278C11.9933 8.78622 13.3 10.7585 13.3 13H14C14 10.5569 12.6467 8.4276 10.6167 7.23967C10.4533 7.41916 10.2666 7.59833 10.0801 7.73278ZM0 13H0.700046C0.700046 10.7363 2.00668 8.76381 3.92011 7.73278C3.73342 7.5758 3.57017 7.41899 3.40677 7.23967C1.35338 8.42776 0 10.557 0 13Z"
                                  fill="#171C22"/>
                        </svg>
                        ثبت‌نام در دیجی‌فای
                    </a>
                </div>
            </div>
            <div class="d-none d-xl-flex align-items-center">
                <a href="<?= $sign_in ?>" class="me-md-4 me-3 text-dark fw-normal text-decoration-none fs-6">
                    ورود
                </a>
                <a href="<?= $sign_up ?>"
                   class="link-white me-md-4 me-3 border rounded-1 btn fs-6 fw-normal d-flex gap-2 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                        <path d="M6.99996 0C9.40331 0 11.3633 1.88271 11.3633 4.19137C11.3633 6.49998 9.40335 8.36032 6.99996 8.36032C4.59657 8.36032 2.6366 6.49998 2.6366 4.19137C2.6366 1.88275 4.59657 0 6.99996 0ZM6.99996 7.6879C9.00664 7.6879 10.6634 6.11898 10.6634 4.16887C10.6634 2.21892 9.00664 0.672372 6.99996 0.672372C4.99328 0.672372 3.33652 2.24129 3.33652 4.19141C3.33652 6.14136 4.99328 7.6879 6.99996 7.6879ZM10.0801 7.73278C11.9933 8.78622 13.3 10.7585 13.3 13H14C14 10.5569 12.6467 8.4276 10.6167 7.23967C10.4533 7.41916 10.2666 7.59833 10.0801 7.73278ZM0 13H0.700046C0.700046 10.7363 2.00668 8.76381 3.92011 7.73278C3.73342 7.5758 3.57017 7.41899 3.40677 7.23967C1.35338 8.42776 0 10.557 0 13Z"
                              fill="#171C22"/>
                    </svg>
                    ثبت‌نام در دیجی‌فای
                </a>
            </div>
        </nav>
    </div>
</header>
<main class="bg-back-main z-top position-relative">




