@extends('layout.main')

@section('content')
    {{--  hero  --}}
    <section
        style="background-image: url({{asset('images/home-header.jpg')}}); background-size: cover;background-repeat: no-repeat;"
        class="flex-column d-flex justify-content-center align-items-center vh-65">
        <div class="container text-center text-white ">
            <h1 class="pb-5 fw-bolder lh-lg fs-1 animate__animated animate__fadeIn">
                به جمع ۲۰۰۰+ فروشندگان دیجی‌فای بپیوندید و
                یک ماه رایگان از تمام خدمات ما استفاده کنید.
            </h1>
            <a class="btn link-dark d-inline-flex align-items-center w-auto justify-content-center animate__animated animate__fadeInUp animate__delay-1s">
                ثبت‌نام در دیجی‌فای
            </a>
        </div>
    </section>
    {{-- services --}}
    <section class="container py-5">
        <div class="row justify-content-center align-items-center text-center">
            <h3 class="text-dark fw-bolder animate__animated animate__fadeIn animate__delay-1s">
                خدمات اختصاصی دیجی‌فای
            </h3>
            <p class="py-4 text-dark fw-light animate__animated animate__fadeIn animate__delay-2s">
                دیجی‌فای تمام ابزارها و نرم‌افزارهای جانبی برای مدیریت کسب‌وکارتان را همیشه و همه‌جا در اختیار شما قرار
                می‌دهد. کافی است با گوشی موبایل یا لپتاپ وارد پنل مدیریتی فروشگاه خود شوید.
            </p>
        </div>
        <div class="row wow animate__animated animate__fadeIn">
            @for($i=1;$i<9;$i++)
                <a href="#"
                   class="fadein d-flex flex-column align-items-center gap-1 col-lg col-6 border-start border-semi-light text-center no-border-first no-border-last menu-svg">
                    <div class="position-relative max-width-28 py-2">
                        @include('partials.SVG.icon-menu')
                    </div>
                    <h6 class="fs-6 fw-light text-dark pb-2">پرداخت امن </h6>
                </a>
            @endfor
        </div>
    </section>
    {{-- about --}}
    <section class="container p-lg-5 px-4">
        <div class="row ">
            <div class="col-12 col-lg-6 text-dark p-lg-5 mb-5 mb-lg-0">
                <h3 class="pb-lg-4 pb-2 lh-base fw-bolder wow animate__animated animate__fadeInLeft">
                    دیجی‌فای:
                    <br>
                    شروع مسیر فروش آنلاین
                </h3>
                <p class="wow animate__animated animate__fadeInLeft">
                    ما تمام موانع را برداشته‌ایم تا شما در کمترین زمان صاحب فروشگاه اینترنتی خودتان شوید و قدم در راه
                    فروش آنلاین بگذارید.
                </p>
            </div>
            <div class="col-12 col-lg-6 p-lg-5 mb-3 mb-lg-0 section-1">
                <div class="card border-0 bg-transparent box1">
                    <div class="ratio ratio-1x1 rounded-2 d-flex lazy-slow shadow_box animate__animated animate__zoomIn animate__delay-1s">
                        <img src="#"
                             class="object-fit border border-semi-light rounded-2"
                             alt="...">
                    </div>
                    <div class="card-body text-dark px-0">
                        <h5 class="card-title py-lg-3 pb-0 pt-2 fw-bold wow animate__animated animate__zoomIn animate__delay-1s">دیجی‌فای، بستر فروش آنلاین</h5>
                        <p class="card-text wow animate__animated animate__zoomIn animate__delay-1s">دیجی‌فای با ارائه یک فروشگاه‌ساز کامل با تمام امکانات، به شما این امکان را
                            می‌دهد تا با وارد کردن اطلاعاتتان، یک وب‌سایت اختصاصی برای کسب‌وکارتان بسازید، آن‌را
                            شخصی‌سازی کنید و یک بستر حرفه‌ای برای فروش آنلاین محصولاتتان ایجاد کنید.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 no-translate translate-middle-y p-lg-5 mb-3 mb-lg-0 section-2">
                <div class="card border-0 bg-transparent box2">
                    <div class="ratio ratio-1x1 rounded-2 d-flex lazy-slow shadow_box animate__animated animate__zoomIn animate__delay-1s">
                        <img src="#"
                             class="object-fit border border-semi-light rounded-2"
                             alt="...">
                    </div>
                    <div class="card-body text-dark px-0">
                        <h5 class="card-title py-lg-3 pb-0 pt-2 fw-bold wow animate__animated animate__zoomIn animate__delay-1s">دیجی‌فای، بستر فروش آنلاین</h5>
                        <p class="card-text wow animate__animated animate__zoomIn animate__delay-1s">دیجی‌فای با ارائه یک فروشگاه‌ساز کامل با تمام امکانات، به شما این امکان را
                            می‌دهد تا با وارد کردن اطلاعاتتان، یک وب‌سایت اختصاصی برای کسب‌وکارتان بسازید، آن‌را
                            شخصی‌سازی کنید و یک بستر حرفه‌ای برای فروش آنلاین محصولاتتان ایجاد کنید.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-lg-5 mb-3 mb-lg-0 section-3">
                <div class="card border-0 bg-transparent box3">
                    <div class="ratio ratio-1x1 rounded-2 d-flex lazy-slow shadow_box animate__animated animate__zoomIn animate__delay-1s">
                        <img src="#"
                             class="object-fit border border-semi-light rounded-2"
                             alt="...">
                    </div>
                    <div class="card-body text-dark px-0">
                        <h5 class="card-title py-lg-3 pb-0 pt-2 fw-bold wow animate__animated animate__zoomIn animate__delay-1s">دیجی‌فای، بستر فروش آنلاین</h5>
                        <p class="card-text wow animate__animated animate__zoomIn animate__delay-1s">دیجی‌فای با ارائه یک فروشگاه‌ساز کامل با تمام امکانات، به شما این امکان را
                            می‌دهد تا با وارد کردن اطلاعاتتان، یک وب‌سایت اختصاصی برای کسب‌وکارتان بسازید، آن‌را
                            شخصی‌سازی کنید و یک بستر حرفه‌ای برای فروش آنلاین محصولاتتان ایجاد کنید.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-draw">
            @include('partials.SVG.curve-right')
        </div>
    </section>
    {{-- join us --}}
    @include('partials.joinus')
    {{--  partners  --}}
    <section class="container py-5 wow animate__animated animate__fadeIn">
        <h3 class="text-center fw-bolder text-dark">
            همکاران ما در مسیر ارائه خدمات یکپارچه به شما:
        </h3>
        <div class="row pt-5">
            @for($i=1;$i<7;$i++)
                <div
                    class="col-lg col-6 overflow-hidden py-lg-5 border-start border-semi-light text-center no-border-first no-border-last">
                    <div class="swiper swiper1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">@include('partials.SVG.brand')</div>
                            <div class="swiper-slide">@include('partials.SVG.brand')</div>
                            <div class="swiper-slide">@include('partials.SVG.brand')</div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

    </section>
    {{-- testimonial --}}
    <section class="container py-5 wow animate__animated animate__fadeIn animate__delay-2s">
        <h3 class="text-center fw-bolder text-dark fs-3">
            دیگران درباره <span class="highlight-yellow fs-3">دیجی فای</span> چه میگویند؟
        </h3>
        <div class="row">
            <div class="swiper swiper2 px-3">
                <div class="swiper-wrapper" >
                    @for($i=1;$i<4;$i++)
                        <div class="swiper-slide">
                            <div class="card card-shadow rounded-2 text-center overflow-visible">
                                <div class="position-relative" style="top: -80px">
                                    <img src="{{asset('images/testimony-image.jpg')}}"
                                         width="160px"
                                         class=" rounded-circle mx-auto d-block"
                                         alt="...">

                                </div>
                                <div class="card-body neg-margin-top">
                                    <h5 class="card-title">برند سیسکراب</h5>
                                    <a href="#" class="card-link text-card">www.siscrub.com</a>
                                    <p class="card-text pt-2">خوشحالم که با تیم جوون و پرانرژی دیجی‌فای آشنا شدم. سایتی
                                        که برام ساختن خیلی کار رو برام آسون کرده و تیم پشتیبانیشون خیلی سریع به تمام
                                        سوالاتم همیشه پاسخ دادن. امیدوارم روز به روز دیجی‌فای گسترده‌تر بشه و به کسب و
                                        کارهای بیشتری کمک کنه.</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    @include('partials.action-banner')
@endsection
