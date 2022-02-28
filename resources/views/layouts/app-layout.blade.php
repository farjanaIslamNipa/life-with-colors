<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=4, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    {{-- Fontawesome kit code --}}
    <script src="https://kit.fontawesome.com/02ea0c4ad9.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
</head>
<body>
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')

    @yield('script')

</body>
</html>
