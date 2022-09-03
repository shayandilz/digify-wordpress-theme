@extends('layout.main')

@section('content')

    @include('partials.banner-top')
    <div id="scroll-to" class="opacity-0 pt-5"></div>
    @include('partials.service-icon')

    <section class="py-5 container px-4 px-lg-0">
        <div class="row position-relative tile-section">
            <div class="position-absolute end-0 w-auto translate-middle-y tiles">
                @include('partials.SVG.tiles')
            </div>
            <h3 class="text-center pb-5 text-dark fs-2 fw-bolder lh-base wow animate__animated animate__fadeIn">
                فروشگاه‌ساز دیجی‌فای چگونه کار می‌کند؟
            </h3>
            <div class="col-lg-6 col-12 d-flex flex-column justify-content-evenly">
                @for($i=1;$i<4;$i++)
                    <div class="pb-3">
                        <h5 class="text-dark fw-bolder fs-4 lh-base wow animate__animated animate__fadeInDown animate__delay-1s">
                            قدم اول: فروشگاه اینترنتی خودتان را می‌سازید
                        </h5>
                        <p class="fs-5 wow animate__animated animate__fadeInDown animate__delay-2s">
                            به سادگی و بدون نیاز به دانش فنی، فروشگاه خود را ساخته و محصولاتتان را به نمایش میگذارید.
                        </p>
                    </div>
                @endfor
            </div>
            <div class="col-lg-6 col-12 wow animate__animated animate__fadeIn d-flex justify-content-center">
                <div class="card-shadow w-75 rounded-2 d-flex" style="height: 700px">
                    <img src="#" class="w-100 border border-semi-light rounded-2"
                         alt="...">
                </div>
            </div>
            <div class="position-absolute start-0 w-auto" style="bottom: -140px">
                @include('partials.SVG.tiles')
            </div>
        </div>
    </section>
    @include('partials.box-purple')
    @include('partials.latest-post')
    @include('partials.action-banner')

@endsection
