@extends('layout.main')

@section('content')


    <div class="position-fixed blog-progress w-100 z-top">
        <progress class="postProgressBar w-100" max="100" value="0"></progress>
    </div>
    <div class="container" id="startProgressBar">
        <div class="row align-items-center">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb my-0 py-4 ">
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none text-semi-light" href="http://balochy.lavan.co">دیجی‌فای</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none text-semi-light"
                               href="http://balochy.lavan.co/product-category/necklace/">بلاگ</a>
                        </li>
                        <li class="breadcrumb-item active text-semi-light">بازاریابی شبکه‌های اجتماعی</li>
                    </ul>
                </nav>
            </div>
        </div>
        <section class="row flex-column-reverse flex-lg-row py-0 py-lg-5 gap-lg-0 gap-5">
            <div class="col-lg-6 col-12">
                <h1 class="fs-3 fw-bold text-dark">
                    چگونه یک کپشن خوب در اینستاگرام بنویسیم؟
                </h1>
                <div class="d-inline-flex w-100 justify-content-between justify-content-lg-start">
                    <span class="text-semi-light small fw-lighter">
                        زمان خواندن: پنج دقیقه
                    </span>
                    <span class="text-semi-light ms-5 small fw-lighter">
                        تاریخ انتشار: ۱۴۰۱/۰۳/۰۲
                    </span>
                </div>
                <ul class="list-unstyled my-5">
                    <li class="text-semi-light text-decoration-none">
                        آنچه در این مقاله می‌خوانید:
                    </li>
                    <li>
                        <a class="active-list-blog text-decoration-none" href="#">
                            اینگیجمنت بالا، کلید کپشن خوب در اینستاگرام
                        </a>
                    </li>
                    <li>
                        <a class="text-semi-light text-decoration-none" href="#">
                            تعیین هدف پست اینستاگرام
                        </a>
                    </li>
                    <li>
                        <a class="text-semi-light text-decoration-none" href="#">
                            اینستاگرام چگونه یک کپشن خوب در اینستاگرام بنویسیم؟
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-12">
                <img src="{{asset('images/blog-banner.jpg')}}"
                     class="img-fluid"
                     alt="...">
            </div>
        </section>
        <section class="row py-5">
            <article class="col-lg-10 col-12 text-dark d-flex gap-3 flex-column">
                <p>
                    کپشن خوب در اینستاگرام چیست؟ هر کس ممکن است جواب خاصی به این سؤال بدهد. یکی ممکن است بگوید کپشنی خوب
                    است که واضح و شفاف منظور را برساند و دیگری ممکن است بگوید کپشنی که احساسات مخاطب را برانگیزد. واقعیت
                    این است که هدف شما از پیجتان معیارهای خوب یا بد بودن کپشن اینستاگرامتان را تعیین می‌کند. بسته به
                    اینکه شما بلاگر باشید یا یک پیج فروشگاهی کوچک و یا یک بیزینس بزرگ،‌ باید معیارهای خاصی را در نوشتن
                    کپشن رعایت کنید.

                    ما سعی می‌کنیم اینجا معیارها و ویژگی‌های یک کپشن خوب برای کسب و کارهای خرد و مستقل که کالا یا خدمات
                    خاصی به مشتری ارائه می‌دهند را بگوییم.
                </p>
                <img src="{{asset('images/blog-banner.jpg')}}"
                     class="img-fluid"
                     alt="...">
                <h5>
                    اینگیجمنت بالا، کلید کپشن خوب در اینستاگرام
                </h5>

                <p>
                    کپشن خوب در اینستاگرام چیست؟ هر کس ممکن است جواب خاصی به این سؤال بدهد. یکی ممکن است بگوید کپشنی خوب
                    است که واضح و شفاف منظور را برساند و دیگری ممکن است بگوید کپشنی که احساسات مخاطب را برانگیزد. واقعیت
                    این است که هدف شما از پیجتان معیارهای خوب یا بد بودن کپشن اینستاگرامتان را تعیین می‌کند. بسته به
                    اینکه شما بلاگر باشید یا یک پیج فروشگاهی کوچک و یا یک بیزینس بزرگ،‌ باید معیارهای خاصی را در نوشتن
                    کپشن رعایت کنید.

                    ما سعی می‌کنیم اینجا معیارها و ویژگی‌های یک کپشن خوب برای کسب و کارهای خرد و مستقل که کالا یا خدمات
                    خاصی به مشتری ارائه می‌دهند را بگوییم.
                </p>
            </article>
            <aside class="col-lg-2 col-12 sticky-side">
                <div class="bg-purple d-flex flex-column gap-4 px-3 py-5 text-center">
                    <span class="text-white">
                        یک ماه
استفاده رایگان!
                    </span>
                    <p class="text-white">
                        با ثبت‌نام در دیجی‌فای یک ماه رایگان از تمام ابزارها استفاده کنید.
                    </p>
                    <a class="btn link-dark d-flex align-items-center justify-content-center">
                        ثبت‌نام در دیجی‌فای
                    </a>
                </div>
            </aside>
            <section class="col-lg-10 col-12 py-5">
                <h6 class="pb-3 text-start text-lg-center fs-3 fw-bold">جدیدترین پست‌های بلاگ دیجی‌فای</h6>
                <div class="row gap-5 gap-lg-0">
                    <div class="col-lg-6 col-12">
                        @include('partials.blog-post')
                    </div>
                    <div class="col-lg-6 col-12">
                        @include('partials.blog-post')
                    </div>
                </div>
            </section>
        </section>

    </div>

@endsection
