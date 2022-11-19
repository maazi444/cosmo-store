<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://fonts.cdnfonts.com/css/hk-groteks" rel="stylesheet" />
    <!-- font-family: 'HK Grotesk', sans-serif; -->

    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" />
    <title>Levre Cosmetics | Shop all kinds of Cosmetics</title>
</head>

<body>
    @include('body.header')

    @yield('main')

    <script src="{{
                asset('frontend/js/vendor/modernizr-3.11.2.min.js')
            }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>