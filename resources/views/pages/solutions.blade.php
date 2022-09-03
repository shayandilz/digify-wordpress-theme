@extends('layout.main')

@section('content')

    <section class="py-5 d-flex align-items-center vh-100 position-relative">
        <div class="position-absolute top-0 end-0 mt-4">
            @include('partials.SVG.curve-line')
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <h1 class="text-dark fw-bold lh-base pb-3 wow animate__animated animate__fadeInUp">
                        هر کسب‌وکاری که دارید، دیجی‌فای در خدمت شماست
                    </h1>
                    <p class="mb-4 wow animate__animated animate__fadeInUp animate__delay-1s">
                        فرقی ندارد کسب‌وکار اینستاگرامی دارید یا حضوری، خودتان همه کارها را می‌کنید یا تیم بزرگی دارید، با دیجی‌فای کسب‌وکار شما بزرگ‌تر می‌شود.
                    </p>
                    <div class="d-flex gap-5">
                        <a href="#" class="w-auto link-dark border rounded-1 btn fs-6 d-flex gap-2 align-items-center wow animate__animated animate__fadeInDown animate__delay-1s">
                            ثبت‌نام در دیجی‌فای
                        </a>
                        <a href="#" class="w-auto link-white border rounded-1 btn fs-6 d-flex gap-2 align-items-center wow animate__animated animate__fadeInDown animate__delay-2s">
                            ثبت‌نام در دیجی‌فای
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-5 mt-lg-0 px-4 wow animate__animated animate__fadeIn animate__delay-2s">
                    <div class="card-shadow w-100 h-100 rounded-2 d-flex ratio-16x9 ratio">
                        <img src="{{asset('images/home-header.jpg')}}" class="object-fit card-img-top border border-semi-light rounded-2"
                             alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.box-purple')
    <section class="container py-5 vh-65 d-flex justify-content-center align-items-center">
        <div class="row justify-content-center align-items-center wow animate__animated animate__fadeIn animate__delay-2s">
            <div class="col-10 ">
                <div class="position-relative d-flex">
                    <video id="video" height="100%" width="100%" poster="{{asset('images/home-header.jpg')}}" muted>
                        <source src="{{asset('images/video.mp4')}}" type="video/mp4">
                    </video>
                    <div id="video_tr" class="lazy position-absolute top-0 start-0 end-0 bottom-0 text-center d-flex flex-column justify-content-center align-items-center">
                        <button class="bg-transparent border-0" id="play_button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="#fff" class="bi bi-play-fill" viewBox="0 0 16 16">
                                <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                            </svg>
                        </button>
                        <span class="text-white fw-bold fs-5">
                            دیجی‌فای چه کمکی به رشد و مدیریت
                            کسب‌وکار شما می‌کند؟
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <div class="row justify-content-center align-items-center">
            <h3 class="text-center pb-5 text-dark fs-2 fw-bolder wow animate__animated animate__fadeIn">
                فروشگاه‌ساز دیجی‌فای چگونه کار می‌کند؟
            </h3>
            <div class="col-12 gap-6 d-flex flex-lg-row flex-column justify-content-center align-items-center wow animate__animated animate__fadeIn">
                <div class="d-flex flex-column justify-content-center align-items-center ">
                    <div class="bg-white rounded-1 w-100 position-relative">
                        <div class="position-absolute top-50 start-100 translate-middle-y d-none d-lg-block">
                            @include('partials.SVG.arrow-left')
                        </div>
                        <a href="#"
                           class="m-5 d-flex flex-column align-items-center gap-4 col text-center menu-svg wow animate__animated animate__zoomIn animate__delay-1s">
                            <div class="position-relative max-width-28 py-2 z-top">
                                @include('partials.SVG.icon-menu')
                            </div>
                        </a>
                    </div>
                    <span class="fs-6 fw-lighter text-dark pt-4 wow animate__animated animate__zoomIn animate__delay-1s">پرداخت امن و اختصاصی</span>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="bg-white rounded-1 w-100 position-relative">
                        <div class="position-absolute top-50 start-100 translate-middle-y d-none d-lg-block">
                            @include('partials.SVG.arrow-left')
                        </div>
                        <a href="#"
                           class="m-5 d-flex flex-column align-items-center gap-4 col text-center menu-svg wow animate__animated animate__zoomIn animate__delay-2s">
                            <div class="position-relative max-width-28 py-2 z-top">
                                @include('partials.SVG.icon-menu')
                            </div>
                        </a>
                    </div>
                    <span class="fs-6 fw-lighter text-dark pt-4 wow animate__animated animate__zoomIn animate__delay-2s">پرداخت امن و اختصاصی</span>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="bg-white rounded-1 w-100">
                        <a href="#"
                           class="m-5 d-flex flex-column align-items-center gap-4 col text-center menu-svg wow animate__animated animate__zoomIn animate__delay-3s">
                            <div class="position-relative max-width-28 py-2 z-top">
                                @include('partials.SVG.icon-menu')
                            </div>
                        </a>
                    </div>
                    <span class="fs-6 fw-lighter text-dark pt-4 wow animate__animated animate__zoomIn animate__delay-3s">پرداخت امن و اختصاصی</span>
                </div>
            </div>
        </div>
    </section>
@endsection
