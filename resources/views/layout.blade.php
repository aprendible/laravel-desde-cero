<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Aprendible')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('partials.nav')

    @include('partials.session-status')

    @yield('content')
</body>
</html>
