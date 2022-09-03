@extends('layout.main')

@section('content')

    <div class="container">
        <section class="row py-5 text-center justify-content-center gap-4  wow animate__animated animate__fadeIn">
            <div class="col-lg-10 col-12">
                <h1 class="text-dark pb-4">
                    تعرفه‌های دیجی‌فای
                </h1>
                <p class="text-dark mb-5 mb-lg-1">
                    با دیجی‌فای، به دنیایی از خدمات متنوع و کاربردی وصل می‌شوید که همیشه به‌روز می‌شود و نیازهای
                    کسب‌وکار شما را در طی زمان برطرف می‌کند. پکیج‌های ما به گونه‌ای طراحی شده‌اند که شما دقیقا متناسب با
                    نیاز خود هزینه می‌کنید تا با کمترین قیمت به بیشترین امکانات دسترسی داشته باشید.
                </p>
                <div class="py-5 swiper swiper4 swiper-custom overflow-visible px-4">
                    <div class="swiper-pagination w-auto gap-2 d-inline-flex position-relative float-end" style="padding: 8px 4px;">
                        <span class="marker"></span>
                    </div>
                    <ul class="swiper-wrapper m-0 p-0 list-unstyled">
                        @for($i=1;$i<4;$i++)
                            <li class="swiper-slide position-relative bg-white rounded-1" data-name="شش ماهه">
                                <div
                                    class="w-auto bg-white rounded-1 border position-absolute top-0 ms-lg-5 ms-3 translate-middle-y">
                                    <div class="d-flex p-2 align-items-center">
                                        @include('partials.SVG.glass')
                                        <div class="d-flex flex-column">
                                            <span class="fw-bold fs-5 pb-2">دیجی‌فای لایت سه ماهه</span>
                                            <span class="small fw-lighter text-semi-light text-start">
                                                مناسب تمام کسب‌وکارها
                                            </span>
                                        </div>

                                    </div>
                                </div>
                                <div class="overflow-hidden px-lg-5 px-2">
                                    <div class="pt-5 text-center row flex-column-reverse flex-lg-row align-items-center position-relative">
                                        <div class="col-lg-8 col-12 pt-2 pb-4 px-lg-0">
                                            <ul class="text-start px-4">
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                                <li>فروشگاه اینترنتی</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 col-12 pt-2 px-3 pb-4 d-flex flex-column">
                                            <h4 class="fs-1 fw-bold text-lg-end text-center">
                                                ۶۹۵،۰۰۰
                                            </h4>
                                            <span class="text-semi-light text-lg-end text-center pb-4">
                                            تومان
                                        </span>
                                            <a class="btn fw-light link-dark d-flex align-items-center justify-content-center">
                                                شروع یک ماه استفاده رایگان!
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endfor
                    </ul>

                </div>
                <div class="d-inline-flex justify-content-start w-100 gap-5">
                    <span class="small text-dark fw-light">
                            در انتخاب پکیج مشکلی دارید؟
                    </span>
                    <a href="#"
                       class="small text-dark text-decoration-underline fw-light d-flex align-items-center justify-content-center gap-2">
                        تماس با پشتیبانی دیجی‌فای
                        @include('partials.SVG.arrow-icon')
                    </a>
                </div>
            </div>
        </section>
        <section class="row py-5">
            <h3 class="text-start fw-bold pb-4">
                چرا دیجی‌فای را انتخاب کنیم؟
            </h3>
            @for($i=1;$i<5;$i++)
                <div class="col-lg-3 col-6">
                    <div class="menu-svg flex-column gap-3 d-flex justify-content-start">
                        <div class="position-relative">
                            @include('partials.SVG.icon-menu')
                        </div>
                        <h6 class="text-decoration-underline py-2 fw-bold">
                            سی روز استفاده رایگان
                        </h6>
                        <p class="fw-light small">
                            با ثبت‌نام در دیجی‌فای می‌توانید ۳۰ روز رایگان از تمام خدمات استفاده کنید و فروشگاه خود را
                            بسازید.
                        </p>
                    </div>
                </div>
            @endfor
        </section>

    </div>
    @include('partials.action-banner')

@endsection
