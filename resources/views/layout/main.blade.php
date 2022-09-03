<!doctype html>
<html lang="fa" dir="rtl">
<head>

    <meta charset="UTF-8">
    <meta name="keywords" content="Digify website">
    <meta name="description" content="">
    <meta name="author" content="EJ">
    <link rel="icon" href="{{ asset('favicon.ico')}}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digify</title>
    {{--  plugins styles  --}}
    <link href="{{ asset('css/extra-style.css') }}" rel="stylesheet">
    <!--  for  RTL website -->
    <link href="{{ asset('css/style.css?ver=1.0') }}" rel="stylesheet">
    @yield('style')

</head>
<body class="p-0">
    <div id="app">
        @include('layout.header')
        <main class="bg-back-main">
            @yield('content')
        </main>
        @include('layout.footer')
    </div>
</body>

@yield('script')
<script src="{{ asset('js/app.js?ver=1.0') }}"></script>
</html>
