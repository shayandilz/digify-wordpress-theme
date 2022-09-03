<header id="main-header" class="w-100 position-fixed lazy">
    <div class="flex-nowrap bg-white">
        <nav class="container navbar navbar-expand-xl rounded navbar-light px-2  lazy-slow justify-content-xl-between justify-content-xl-start animate__animated animate__fadeInDown animate__delay-1s">
            <button class="navbar-toggler border-0 px-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 4.5H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.5303 9.5H21.0003" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 14.5H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.5303 19.5H21.0003" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <a class="navbar-brand me-0 me-lg-3" href="/">
                <img class="lazy" height="30" src="{{ asset('images/logo-header.svg') }}" alt="">
            </a>
            <div class="collapse navbar-collapse justify-content-start mt-4 mt-lg-0" id="navbarNav">
                <ul class="navbar-nav pe-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/shop-builder">فروشگاه‌ساز</a>

                    </li>
                    <li class="nav-item custom-dropdown position-relative">
                        <a class="nav-link" href="/services">خدمات دیجی فای</a>
                        <ul class="bg-white px-2 dropdown-menu w-auto text-end">
                            <li class="d-flex align-items-center p-1 p-lg-3 gap-3 menu-svg">
                                <div class="position-relative">
                                    @include('partials.SVG.icon-menu')
                                </div>
                                <a class="dropdown-item p-0  lazy" href="/marketing">خدمات یکپارچه دیجی‌فای</a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="d-flex align-items-center p-1 p-lg-3 gap-3 menu-svg">
                                <div class="position-relative">
                                    @include('partials.SVG.icon-menu')
                                </div>
                                <a class="dropdown-item p-0 lazy" href="/marketing">خدمات پست و ارسال</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/solutions">راهکارها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pricing">تعرفه ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">بلاگ</a>
                    </li>
                </ul>
                <div class="d-flex d-xl-none align-items-center">
                    <a href="#" class="me-md-4 me-3 text-dark fw-normal text-decoration-none fs-6">
                        ورود
                    </a>
                    <a href="#" class="link-white me-md-4 me-3 border rounded-1 btn fs-6 fw-normal d-flex gap-2 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                            <path d="M6.99996 0C9.40331 0 11.3633 1.88271 11.3633 4.19137C11.3633 6.49998 9.40335 8.36032 6.99996 8.36032C4.59657 8.36032 2.6366 6.49998 2.6366 4.19137C2.6366 1.88275 4.59657 0 6.99996 0ZM6.99996 7.6879C9.00664 7.6879 10.6634 6.11898 10.6634 4.16887C10.6634 2.21892 9.00664 0.672372 6.99996 0.672372C4.99328 0.672372 3.33652 2.24129 3.33652 4.19141C3.33652 6.14136 4.99328 7.6879 6.99996 7.6879ZM10.0801 7.73278C11.9933 8.78622 13.3 10.7585 13.3 13H14C14 10.5569 12.6467 8.4276 10.6167 7.23967C10.4533 7.41916 10.2666 7.59833 10.0801 7.73278ZM0 13H0.700046C0.700046 10.7363 2.00668 8.76381 3.92011 7.73278C3.73342 7.5758 3.57017 7.41899 3.40677 7.23967C1.35338 8.42776 0 10.557 0 13Z" fill="#171C22"/>
                        </svg>
                        ثبت‌نام در دیجی‌فای
                    </a>
                </div>
            </div>
            <div class="d-none d-xl-flex align-items-center">
                <a href="#" class="me-md-4 me-3 text-dark fw-normal text-decoration-none fs-6">
                    ورود
                </a>
                <a href="#" class="link-white me-md-4 me-3 border rounded-1 btn fs-6 fw-normal d-flex gap-2 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                        <path d="M6.99996 0C9.40331 0 11.3633 1.88271 11.3633 4.19137C11.3633 6.49998 9.40335 8.36032 6.99996 8.36032C4.59657 8.36032 2.6366 6.49998 2.6366 4.19137C2.6366 1.88275 4.59657 0 6.99996 0ZM6.99996 7.6879C9.00664 7.6879 10.6634 6.11898 10.6634 4.16887C10.6634 2.21892 9.00664 0.672372 6.99996 0.672372C4.99328 0.672372 3.33652 2.24129 3.33652 4.19141C3.33652 6.14136 4.99328 7.6879 6.99996 7.6879ZM10.0801 7.73278C11.9933 8.78622 13.3 10.7585 13.3 13H14C14 10.5569 12.6467 8.4276 10.6167 7.23967C10.4533 7.41916 10.2666 7.59833 10.0801 7.73278ZM0 13H0.700046C0.700046 10.7363 2.00668 8.76381 3.92011 7.73278C3.73342 7.5758 3.57017 7.41899 3.40677 7.23967C1.35338 8.42776 0 10.557 0 13Z" fill="#171C22"/>
                    </svg>
                    ثبت‌نام در دیجی‌فای
                </a>
            </div>
        </nav>
    </div>
</header>


