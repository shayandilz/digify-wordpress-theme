@extends('layout.main')

@section('content')

    <div class="py-5 container">
        <section class="row align-items-center min-vh-100">
            <div class="col-12 col-lg-6">
                <img src="{{asset('images/aboutus.jpg')}}"
                     class="img-fluid border rounded-1"
                     alt="...">
            </div>
            <div class="col-12 col-lg-6">
                <span class="fs-6 text-violet">
                    خدمات اختصاصی دیجی‌فای
                </span>
                <h1 class="fw-bold py-3">
                    مارکتینگ و جذب مشتری
                </h1>
                <p class="text-dark pb-2">
                    رشد و ماندگاری هر کسب‌وکاری در گرو افزایش تعداد مشتریان جدید و حفظ مشتریان قدیمی است. در دنیای امروز
                    این کار با روش‌های سنتی مارکتینگ دیگر امکان‌پذیر نیست و نیاز به به‌روزرسانی دارد.

                </p>
                <a class="btn link-dark d-inline-flex align-items-center justify-content-center">
                    شروع یک ماه استفاده رایگان!
                </a>
            </div>
            <div class="col-12">
                <a class="text-center fs-6 py-2 d-flex flex-column justify-content-center align-items-center" href="#">
                    @include('partials.SVG.arrow-down')
                    بیش‌تر بخوانید
                </a>
                <p class="py-2 fw-normal text-center">
                    دیجی‌فای تمام ابزارها و نرم‌افزارهای جانبی برای مدیریت کسب‌وکارتان را همیشه و همه‌جا در اختیار شما قرار
                    می‌دهد. کافی است با گوشی موبایل یا لپتاپ وارد پنل مدیریتی فروشگاه خود شوید.
                </p>
            </div>
        </section>
        <section class="row py-5 g-5 g-lg-0">
            <div class="col-12 col-lg-6 px-4 d-flex flex-column gap-lg-4 gap-2">
                <h4>
                    ابزارهای مارکتینگ هوشمند
                </h4>
                <p>
                    با ابزارهای هوشمند مارکتینگ دیجی‌فای، برند خود را در ذهن مخاطب حک کنید و فروشتان را افزایش دهید.
                </p>
                <img src="{{asset('images/aboutus.jpg')}}"
                     class="img-fluid border rounded-1"
                     alt="...">
            </div>
            <div class="col-12 col-lg-6 px-4 d-flex flex-column-reverse flex-lg-column gap-lg-4 gap-2">
                <img src="{{asset('images/aboutus.jpg')}}"
                     class="img-fluid border rounded-1"
                     alt="...">
                <h4 class="order-2 order-lg-1">
                    ابزارهای مارکتینگ هوشمند
                </h4>
                <p class="order-1 order-lg-2">
                    با ابزارهای هوشمند مارکتینگ دیجی‌فای، برند خود را در ذهن مخاطب حک کنید و فروشتان را افزایش دهید.
                </p>

            </div>
        </section>
    </div>
    @include('partials.latest-post')
    @include('partials.joinus')

@endsection
