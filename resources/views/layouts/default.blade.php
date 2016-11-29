<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')
    @include('includes.menu')
    @include('includes.slider')

    @yield('content')

    @include('includes.footer')
</body>
</html>