<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('demo-layout.header')
    <title>Document</title>
</head>
<body>
        <!-- top header area start -->
        <header id="header-area" class="">

           @include('demo-layout.nav')

           @yield('banner')

        </header>

           @yield('content')

        <!-- top header area end -->
        @include('demo-layout.footer')
</body>
</html>
